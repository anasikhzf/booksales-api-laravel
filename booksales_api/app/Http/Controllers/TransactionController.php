<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Book;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['customer', 'book'])->get();
        return response()->json($transactions);
    }

    public function show($id)
    {
        $transaction = Transaction::with(['customer', 'book'])->find($id);
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
        return response()->json($transaction);
    }

    public function store(Request $request)
    {
        // 1. Validator & cek validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'data' => $validator->errors()
            ], 422);
        }

        // 2. Generate orderNumber unik
        $orderNumber = "ORD-" . strtoupper(uniqid());

        // 3. Ambil user yang login
        $user = auth('api')->user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized!'
            ], 401);
        }

        // 4. Cari data buku
        $book = Book::find($request->book_id);

        // 5. Cek stok buku
        if ($book->stok < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stok barang tidak cukup!'
            ], 400);
        }

        // 6. Hitung total harga
        $totalAmount = $book->price * $request->quantity;

        // 7. Kurangi stok buku dan simpan perubahan
        $book->stok -= $request->quantity;
        $book->save();

        // 8. Simpan transaksi
        $transaction = Transaction::create([
            'order_number' => $orderNumber,
            'customer_id' => $user->id,
            'book_id' => $book->id,
            'total_amount' => $totalAmount,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil disimpan',
            'data' => $transaction
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'total_amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $transaction->total_amount = $request->total_amount;
        $transaction->save();

        return response()->json($transaction);
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transaction->delete();

        return response()->json(['message' => 'Transaction deleted successfully']);
    }
}
