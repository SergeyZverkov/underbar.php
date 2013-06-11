<?php
namespace Underbar;
trait Enumerable{
function each($_1){return Lazy::each($this,$_1);}
function map($_1){return Lazy::map($this,$_1);}
function collect($_1){return Lazy::collect($this,$_1);}
function reduce($_1,$_2){return Lazy::reduce($this,$_1,$_2);}
function inject($_1,$_2){return Lazy::inject($this,$_1,$_2);}
function foldl($_1,$_2){return Lazy::foldl($this,$_1,$_2);}
function reduceRight($_1,$_2){return Lazy::reduceRight($this,$_1,$_2);}
function foldr($_1,$_2){return Lazy::foldr($this,$_1,$_2);}
function get($_1,$_2=NULL){return Lazy::get($this,$_1,$_2);}
function find($_1){return Lazy::find($this,$_1);}
function detect($_1){return Lazy::detect($this,$_1);}
function filter($_1){return Lazy::filter($this,$_1);}
function select($_1){return Lazy::select($this,$_1);}
function where($_1){return Lazy::where($this,$_1);}
function findWhere($_1){return Lazy::findWhere($this,$_1);}
function reject($_1){return Lazy::reject($this,$_1);}
function every($_1=NULL){return Lazy::every($this,$_1);}
function all($_1=NULL){return Lazy::all($this,$_1);}
function some($_1=NULL){return Lazy::some($this,$_1);}
function any($_1=NULL){return Lazy::any($this,$_1);}
function sum(){return Lazy::sum($this);}
function product(){return Lazy::product($this);}
function contains($_1){return Lazy::contains($this,$_1);}
function invoke($_1,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::invoke($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function pluck($_1){return Lazy::pluck($this,$_1);}
function span($_1){return Lazy::span($this,$_1);}
function max($_1=NULL){return Lazy::max($this,$_1);}
function min($_1=NULL){return Lazy::min($this,$_1);}
function sortBy($_1){return Lazy::sortBy($this,$_1);}
function groupBy($_1=NULL,$_2=false){return Lazy::groupBy($this,$_1,$_2);}
function countBy($_1=NULL,$_2=false){return Lazy::countBy($this,$_1,$_2);}
function shuffle(){return Lazy::shuffle($this);}
function toArray(){return Lazy::toArray($this);}
function toList(){return Lazy::toList($this);}
function size(){return Lazy::size($this);}
function memoize(){return Lazy::memoize($this);}
function first($_1=NULL,$_2=NULL){return Lazy::first($this,$_1,$_2);}
function head($_1=NULL,$_2=NULL){return Lazy::head($this,$_1,$_2);}
function take($_1=NULL,$_2=NULL){return Lazy::take($this,$_1,$_2);}
function takeWhile($_1){return Lazy::takeWhile($this,$_1);}
function initial($_1=1,$_2=NULL){return Lazy::initial($this,$_1,$_2);}
function last($_1=NULL,$_2=NULL){return Lazy::last($this,$_1,$_2);}
function rest($_1=1,$_2=NULL){return Lazy::rest($this,$_1,$_2);}
function tail($_1=1,$_2=NULL){return Lazy::tail($this,$_1,$_2);}
function drop($_1=1,$_2=NULL){return Lazy::drop($this,$_1,$_2);}
function dropWhile($_1){return Lazy::dropWhile($this,$_1);}
function compact(){return Lazy::compact($this);}
function flatten($_1=false){return Lazy::flatten($this,$_1);}
function without($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::without($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function union($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::union($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function intersection($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::intersection($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function difference($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::difference($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function uniq($_1=NULL){return Lazy::uniq($this,$_1);}
function unique($_1=NULL){return Lazy::unique($this,$_1);}
function zip($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::zip($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function zipWith($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::zipWith($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function object($_1=NULL){return Lazy::object($this,$_1);}
function indexOf($_1,$_2=0){return Lazy::indexOf($this,$_1,$_2);}
function lastIndexOf($_1,$_2=NULL){return Lazy::lastIndexOf($this,$_1,$_2);}
function sortedIndex($_1,$_2=NULL){return Lazy::sortedIndex($this,$_1,$_2);}
function range($_1=NULL,$_2=1){return Lazy::range($this,$_1,$_2);}
function cycle($_1=NULL){return Lazy::cycle($this,$_1);}
function repeat($_1=-1){return Lazy::repeat($this,$_1);}
function iterate($_1){return Lazy::iterate($this,$_1);}
function parMap($_1,$_2=NULL,$_3=NULL){return Lazy::parMap($this,$_1,$_2,$_3);}
function pop(){return Lazy::pop($this);}
function push($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::push($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function reverse(){return Lazy::reverse($this);}
function shift(){return Lazy::shift($this);}
function sort($_1=NULL){return Lazy::sort($this,$_1);}
function splice($_1,$_2){return Lazy::splice($this,$_1,$_2);}
function unshift($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::unshift($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function concat($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::concat($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function join($_1=','){return Lazy::join($this,$_1);}
function slice($_1,$_2=NULL){return Lazy::slice($this,$_1,$_2);}
function keys(){return Lazy::keys($this);}
function values(){return Lazy::values($this);}
function pairs(){return Lazy::pairs($this);}
function invert(){return Lazy::invert($this);}
function extend($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::extend($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function pick($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::pick($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function omit($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::omit($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function defaults($_1=NULL,$_2=NULL,$_3=NULL,$_4=NULL,$_5=NULL,$_6=NULL,$_7=NULL,$_8=NULL,$_9=NULL){return Lazy::defaults($this,$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9);}
function tap($_1){return Lazy::tap($this,$_1);}
function duplicate(){return Lazy::duplicate($this);}
function has($_1){return Lazy::has($this,$_1);}
function isArray(){return Lazy::isArray($this);}
function isTraversable(){return Lazy::isTraversable($this);}
function chain(){return Lazy::chain($this);}
}