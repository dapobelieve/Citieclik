<?php
namespace App\Http\Controllers\Funcs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Slug extends Controller 
{
     //slug method cool huh ;)
    Public static function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }
}