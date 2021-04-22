<?php

require_once 'src/app/shop/book.php';
require_once 'src/app/review/book.php';

use src\app\shop\Book;
use src\app\review\Book as BookReview;


$book = new Book();
echo $book->getPrice(), "\n";

$book_review = new BookReview();
echo $book_review->getPoint();