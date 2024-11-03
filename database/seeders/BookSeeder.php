<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'published_year' => 1960,
            'genre' => 'Fiction, Historical',
            'description' => 'Scout Finch learns about justice and prejudice in the racially divided South.'
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'published_year' => 1813,
            'genre' => 'Romance, Social Commentary',
            'description' => 'Elizabeth Bennet navigates love and societal expectations in 19th-century England.'
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'published_year' => 1925,
            'genre' => 'Fiction, Tradegy',
            'description' => 'Gatsby’s obsession with wealth and love ends in tragedy.'
        ]);

        Book::create([
            'title' => 'Harry Potter and the Sorcerer’s Stone',
            'author' => 'J.K. Rowling',
            'published_year' => 1997,
            'genre' => 'Fantasy',
            'description' => 'Young wizard Harry Potter discovers his magical heritage and faces dark forces at Hogwarts.'
        ]);
        Book::create([
            'title' => 'The Hunger Games',
            'author' => 'Suzanne Collins',
            'published_year' => 2008,
            'genre' => 'Dystopian, Adventure',
            'description' => 'Katniss Everdeen fights for survival in a televised battle in a dystopian world.'
        ]);

        Book::create([
            'title' => 'The Chronicles of Narnia: The Lion, the Witch, and the Wardrobe',
            'author' => 'C.S. Lewis',
            'published_year' => 1950,
            'genre' => 'Fantasy',
            'description' => 'Four siblings discover a magical land ruled by an evil witch and join Aslan the lion to fight for freedom.'
        ]);

        Book::create([
            'title' => 'The Perks of Being a Wallflower',
            'author' => 'Stephen Chbosky',
            'published_year' => 1999,
            'genre' => 'Coming-of-Age, Young Adult',
            'description' => 'Shy high schooler Charlie finds friendship and self-discovery through a new circle of friends.'
        ]);

        Book::create([
            'title' => 'Atonement',
            'author' => 'Ian McEwan',
            'published_year' => 2001,
            'genre' => 'Historical Fiction, Romance',
            'description' => 'A young girl’s lie alters the lives of two lovers forever during World War II.'
        ]);

        Book::create([
            'title' => 'The Lovely Bones',
            'author' => 'Alice Sebold',
            'published_year' => 2002,
            'genre' => 'Mystery, Drama',
            'description' => 'A murdered girl watches from the afterlife as her family and friends cope with her loss.'
        ]);

        Book::create([
            'title' => 'Divergent',
            'author' => 'Veronica Roth',
            'published_year' => 2011,            
            'genre' => 'Dystopian, Young Adult',
            'description' => 'In a society divided by factions, Tris learns she’s “Divergent” and uncovers a powerful conspiracy.'
        ]);
    }
}
