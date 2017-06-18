#!/usr/bin/php
#<?php

$bdd = 'a:11:{i:0;a:5:{s:3:"img";s:15:"hungergames.jpg";s:3:"cat";s:4:"Book";s:4:"name";s:12:"Hunger Games";s:5:"stock";s:2:"10";s:5:"price";s:2:"12";}i:1;a:5:{s:3:"img";s:17:"jurrasicpark.jpeg";s:3:"cat";s:5:"Ebook";s:4:"name";s:13:"Jurassic Park";s:5:"stock";s:1:"4";s:5:"price";s:1:"8";}i:2;a:5:{s:3:"img";s:14:"theprince.jpeg";s:3:"cat";s:11:"Livre audio";s:4:"name";s:9:"Le prince";s:5:"stock";s:2:"10";s:5:"price";s:1:"5";}i:3;a:5:{s:3:"img";s:10:"wolfws.jpg";s:3:"cat";s:5:"Ebook";s:4:"name";s:18:"Wolf of WallStreet";s:5:"stock";s:1:"7";s:5:"price";s:2:"15";}i:5;a:5:{s:3:"img";s:15:"martine_000.jpg";s:3:"cat";s:7:"Martine";s:4:"name";s:23:"Cherche le congélateur";s:5:"stock";s:1:"3";s:5:"price";s:1:"3";}i:6;a:5:{s:3:"img";s:10:"livre1.jpg";s:3:"cat";s:4:"Book";s:4:"name";s:13:"Da Vinci Code";s:5:"stock";s:2:"11";s:5:"price";s:1:"9";}i:7;a:5:{s:3:"img";s:15:"martine_006.jpg";s:3:"cat";s:7:"Martine";s:4:"name";s:16:"Tente un lowkick";s:5:"stock";s:2:"13";s:5:"price";s:1:"5";}i:8;a:5:{s:3:"img";s:15:"martine_007.jpg";s:3:"cat";s:7:"Martine";s:4:"name";s:24:"Apprend a couper la coke";s:5:"stock";s:1:"5";s:5:"price";s:1:"5";}i:9;a:5:{s:3:"img";s:15:"martine_010.jpg";s:3:"cat";s:7:"Martine";s:4:"name";s:13:"N a pas de PQ";s:5:"stock";s:1:"5";s:5:"price";s:1:"5";}i:10;a:5:{s:3:"img";s:15:"martine_012.jpg";s:3:"cat";s:7:"Martine";s:4:"name";s:25:"Apprends une clé de bras";s:5:"stock";s:2:"10";s:5:"price";s:1:"4";}i:11;a:5:{s:3:"img";s:15:"martine_025.jpg";s:3:"cat";s:7:"Martine";s:4:"name";s:15:"écrit en UTF-8";s:5:"stock";s:1:"3";s:5:"price";s:1:"6";}}';

$cat = 'a:4:{i:0;a:1:{s:4:"name";s:4:"Book";}i:1;a:1:{s:4:"name";s:5:"Ebook";}i:2;a:1:{s:4:"name";s:11:"Livre audio";}i:3;a:1:{s:4:"name";s:7:"Martine";}}';

$passwd = 'a:3:{i:1;a:2:{s:5:"login";s:5:"admin";s:6:"passwd";s:56:"58acb7acccce58ffa8b953b12b5a7702bd42dae441c1ad85057fa70b";}i:2;a:2:{s:5:"login";s:3:"abc";s:6:"passwd";s:56:"b6773126557f37fbc9b24e7b6adedc05d3eb3923fe3feeb369812d16";}i:3;a:2:{s:5:"login";s:6:"abc123";s:6:"passwd";s:56:"49e9254e33b973c8a3bee6c23c9ac361f3bb620d9a92bf8e1beda548";}}';

file_put_contents("private/bdd.csv", $bdd);
file_put_contents("private/cat.csv", $cat);
file_put_contents("private/passwd", $passwd);

?>