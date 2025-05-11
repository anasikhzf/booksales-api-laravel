<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Menyimpan data author dengan banyak poin deskripsi
    private static $authors = [
        [
            'id' => 1,
            'name' => 'J.K. Rowling',
            'descriptions' => [
                'J.K. Rowling is the author of the Harry Potter series.',
                'She is one of the best-selling authors in the world.',
                'Rowling has also written under the pen name Robert Galbraith.'
            ]
        ],
        [
            'id' => 2,
            'name' => 'George Orwell',
            'descriptions' => [
                'George Orwell is known for his novels "1984" and "Animal Farm".',
                'He was a British writer, journalist, and essayist.',
                'Orwell is known for his criticism of totalitarianism and authoritarian regimes.'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Isaac Asimov',
            'descriptions' => [
                'Isaac Asimov was a Russian-American author and professor of biochemistry.',
                'He is known for his works on science fiction, particularly the "Foundation" series.',
                'Asimov also wrote extensively on popular science.'
            ]
        ],
        [
            'id' => 4,
            'name' => 'J.R.R. Tolkien',
            'descriptions' => [
                'J.R.R. Tolkien is best known for writing "The Hobbit" and "The Lord of the Rings".',
                'He was a professor of Anglo-Saxon at Oxford University.',
                'Tolkien is regarded as the father of modern fantasy literature.'
            ]
        ],
        [
            'id' => 5,
            'name' => 'Jane Austen',
            'descriptions' => [
                'Jane Austen is an English novelist known for works such as "Pride and Prejudice".',
                'Her novels focus on themes of love, marriage, and society.',
                'Austen is one of the most widely read and influential authors in English literature.'
            ]
        ],
    ];

    // Mengambil data author
    public static function allAuthors()
    {
        return self::$authors;
    }
}
