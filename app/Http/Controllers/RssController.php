<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;

class RssController extends Controller
{
    public function rss(){
        $f = FeedReader::read('https://berita.depok.go.id/rss.xml');
        $hasil = [];
        $item = $f->get_items(0, $f->get_item_quantity());
        for ($i=0; $i < count($f->get_items()); $i++) { 
            $hasil[] = [
                'title' => $item[$i]->get_title(),
                'link' =>  $item[$i]->get_link()
            ];
        }
        return $hasil;
    }
}
