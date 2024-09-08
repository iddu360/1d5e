<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $builder = $this->db->table('article');
        $nb_article = 5;

        // DE
        for ($article_no = 1; $article_no <= $nb_article; $article_no++) {
            $row = [
                'slug'          => "article-{$article_no}",
                'lang'          => 'de',
                'title'         => "Artikel in Deutsch {$article_no}",
                'text'          => <<<EOT
Artikel in Deutsch. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi eros, ultrices vitae arcu fringilla, sollicitudin tempus lacus. Curabitur suscipit ex eu nisi volutpat, quis pharetra neque dictum. Sed commodo est blandit facilisis vehicula. Ut justo mauris, ultricies eu massa ac, dignissim porttitor ligula. Quisque nec magna ante. Nullam accumsan nunc sed accumsan ornare. Donec orci mi, lobortis sed purus quis, egestas viverra justo. Cras pulvinar, mauris ut efficitur venenatis, urna justo suscipit tortor, nec sodales lacus quam sed dui. Sed auctor, augue vel scelerisque molestie, ligula odio consequat ipsum, vel facilisis sapien velit non risus. Cras at molestie mauris. Nam a euismod purus. Cras vitae commodo orci, vel tempus tortor. Ut sodales, est ac volutpat congue, dui tortor luctus elit, sit amet accumsan lectus diam a tortor. Aenean convallis, elit vel scelerisque accumsan, enim nisi volutpat lacus, in interdum nulla elit nec nunc. Nullam eleifend elit cursus mauris elementum porta.

Nulla et dui at metus pretium accumsan sed et ligula. Integer sodales cursus elit in commodo. Suspendisse ultrices diam elit, sit amet fermentum dui vulputate sit amet. Aenean a eros nec arcu tempus consectetur id cursus quam. Cras quis arcu pellentesque, fringilla nisl vitae, accumsan elit. Praesent nec semper velit, a posuere diam. Quisque in arcu eros. Vivamus venenatis purus risus, ut vehicula turpis ullamcorper nec. Morbi purus leo, lobortis sollicitudin mi sit amet, blandit aliquet orci. Donec tincidunt consequat felis vitae bibendum. Ut porttitor ante eget dui volutpat venenatis. Mauris eget euismod neque, dapibus blandit eros. Cras condimentum metus ac mi tempor, in commodo orci vestibulum. Aliquam a ultricies leo. Integer quis auctor ligula. Nulla sed congue justo.
EOT,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
            $builder->insert($row);
        }

        // EN
        for ($article_no = 1; $article_no <= $nb_article; $article_no++) {
            $row = [
                'slug'          => "article-{$article_no}",
                'lang'          => 'en',
                'title'         => "Article in English {$article_no}",
                'text'          => <<<EOT
Article in English. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi eros, ultrices vitae arcu fringilla, sollicitudin tempus lacus. Curabitur suscipit ex eu nisi volutpat, quis pharetra neque dictum. Sed commodo est blandit facilisis vehicula. Ut justo mauris, ultricies eu massa ac, dignissim porttitor ligula. Quisque nec magna ante. Nullam accumsan nunc sed accumsan ornare. Donec orci mi, lobortis sed purus quis, egestas viverra justo. Cras pulvinar, mauris ut efficitur venenatis, urna justo suscipit tortor, nec sodales lacus quam sed dui. Sed auctor, augue vel scelerisque molestie, ligula odio consequat ipsum, vel facilisis sapien velit non risus. Cras at molestie mauris. Nam a euismod purus. Cras vitae commodo orci, vel tempus tortor. Ut sodales, est ac volutpat congue, dui tortor luctus elit, sit amet accumsan lectus diam a tortor. Aenean convallis, elit vel scelerisque accumsan, enim nisi volutpat lacus, in interdum nulla elit nec nunc. Nullam eleifend elit cursus mauris elementum porta.

Nulla et dui at metus pretium accumsan sed et ligula. Integer sodales cursus elit in commodo. Suspendisse ultrices diam elit, sit amet fermentum dui vulputate sit amet. Aenean a eros nec arcu tempus consectetur id cursus quam. Cras quis arcu pellentesque, fringilla nisl vitae, accumsan elit. Praesent nec semper velit, a posuere diam. Quisque in arcu eros. Vivamus venenatis purus risus, ut vehicula turpis ullamcorper nec. Morbi purus leo, lobortis sollicitudin mi sit amet, blandit aliquet orci. Donec tincidunt consequat felis vitae bibendum. Ut porttitor ante eget dui volutpat venenatis. Mauris eget euismod neque, dapibus blandit eros. Cras condimentum metus ac mi tempor, in commodo orci vestibulum. Aliquam a ultricies leo. Integer quis auctor ligula. Nulla sed congue justo.
EOT,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
            $builder->insert($row);
        }

        // ES
        for ($article_no = 1; $article_no <= $nb_article; $article_no++) {
            $row = [
                'slug'          => "article-{$article_no}",
                'lang'          => 'es',
                'title'         => "Artículo en español {$article_no}",
                'text'          => <<<EOT
Artículo en español. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi eros, ultrices vitae arcu fringilla, sollicitudin tempus lacus. Curabitur suscipit ex eu nisi volutpat, quis pharetra neque dictum. Sed commodo est blandit facilisis vehicula. Ut justo mauris, ultricies eu massa ac, dignissim porttitor ligula. Quisque nec magna ante. Nullam accumsan nunc sed accumsan ornare. Donec orci mi, lobortis sed purus quis, egestas viverra justo. Cras pulvinar, mauris ut efficitur venenatis, urna justo suscipit tortor, nec sodales lacus quam sed dui. Sed auctor, augue vel scelerisque molestie, ligula odio consequat ipsum, vel facilisis sapien velit non risus. Cras at molestie mauris. Nam a euismod purus. Cras vitae commodo orci, vel tempus tortor. Ut sodales, est ac volutpat congue, dui tortor luctus elit, sit amet accumsan lectus diam a tortor. Aenean convallis, elit vel scelerisque accumsan, enim nisi volutpat lacus, in interdum nulla elit nec nunc. Nullam eleifend elit cursus mauris elementum porta.

Nulla et dui at metus pretium accumsan sed et ligula. Integer sodales cursus elit in commodo. Suspendisse ultrices diam elit, sit amet fermentum dui vulputate sit amet. Aenean a eros nec arcu tempus consectetur id cursus quam. Cras quis arcu pellentesque, fringilla nisl vitae, accumsan elit. Praesent nec semper velit, a posuere diam. Quisque in arcu eros. Vivamus venenatis purus risus, ut vehicula turpis ullamcorper nec. Morbi purus leo, lobortis sollicitudin mi sit amet, blandit aliquet orci. Donec tincidunt consequat felis vitae bibendum. Ut porttitor ante eget dui volutpat venenatis. Mauris eget euismod neque, dapibus blandit eros. Cras condimentum metus ac mi tempor, in commodo orci vestibulum. Aliquam a ultricies leo. Integer quis auctor ligula. Nulla sed congue justo.
EOT,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
            $builder->insert($row);
        }

        // FR
        for ($article_no = 1; $article_no <= $nb_article; $article_no++) {
            $row = [
                'slug'          => "article-{$article_no}",
                'lang'          => 'fr',
                'title'         => "Article en français {$article_no}",
                'text'          => <<<EOT
Article en français. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi eros, ultrices vitae arcu fringilla, sollicitudin tempus lacus. Curabitur suscipit ex eu nisi volutpat, quis pharetra neque dictum. Sed commodo est blandit facilisis vehicula. Ut justo mauris, ultricies eu massa ac, dignissim porttitor ligula. Quisque nec magna ante. Nullam accumsan nunc sed accumsan ornare. Donec orci mi, lobortis sed purus quis, egestas viverra justo. Cras pulvinar, mauris ut efficitur venenatis, urna justo suscipit tortor, nec sodales lacus quam sed dui. Sed auctor, augue vel scelerisque molestie, ligula odio consequat ipsum, vel facilisis sapien velit non risus. Cras at molestie mauris. Nam a euismod purus. Cras vitae commodo orci, vel tempus tortor. Ut sodales, est ac volutpat congue, dui tortor luctus elit, sit amet accumsan lectus diam a tortor. Aenean convallis, elit vel scelerisque accumsan, enim nisi volutpat lacus, in interdum nulla elit nec nunc. Nullam eleifend elit cursus mauris elementum porta.

Nulla et dui at metus pretium accumsan sed et ligula. Integer sodales cursus elit in commodo. Suspendisse ultrices diam elit, sit amet fermentum dui vulputate sit amet. Aenean a eros nec arcu tempus consectetur id cursus quam. Cras quis arcu pellentesque, fringilla nisl vitae, accumsan elit. Praesent nec semper velit, a posuere diam. Quisque in arcu eros. Vivamus venenatis purus risus, ut vehicula turpis ullamcorper nec. Morbi purus leo, lobortis sollicitudin mi sit amet, blandit aliquet orci. Donec tincidunt consequat felis vitae bibendum. Ut porttitor ante eget dui volutpat venenatis. Mauris eget euismod neque, dapibus blandit eros. Cras condimentum metus ac mi tempor, in commodo orci vestibulum. Aliquam a ultricies leo. Integer quis auctor ligula. Nulla sed congue justo.
EOT,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
            $builder->insert($row);
        }

        // JA
        for ($article_no = 1; $article_no <= $nb_article; $article_no++) {
            $row = [
                'slug'          => "article-{$article_no}",
                'lang'          => 'ja',
                'title'         => "日本語での記事 {$article_no}",
                'text'          => <<<EOT
日本語での記事. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi eros, ultrices vitae arcu fringilla, sollicitudin tempus lacus. Curabitur suscipit ex eu nisi volutpat, quis pharetra neque dictum. Sed commodo est blandit facilisis vehicula. Ut justo mauris, ultricies eu massa ac, dignissim porttitor ligula. Quisque nec magna ante. Nullam accumsan nunc sed accumsan ornare. Donec orci mi, lobortis sed purus quis, egestas viverra justo. Cras pulvinar, mauris ut efficitur venenatis, urna justo suscipit tortor, nec sodales lacus quam sed dui. Sed auctor, augue vel scelerisque molestie, ligula odio consequat ipsum, vel facilisis sapien velit non risus. Cras at molestie mauris. Nam a euismod purus. Cras vitae commodo orci, vel tempus tortor. Ut sodales, est ac volutpat congue, dui tortor luctus elit, sit amet accumsan lectus diam a tortor. Aenean convallis, elit vel scelerisque accumsan, enim nisi volutpat lacus, in interdum nulla elit nec nunc. Nullam eleifend elit cursus mauris elementum porta.

Nulla et dui at metus pretium accumsan sed et ligula. Integer sodales cursus elit in commodo. Suspendisse ultrices diam elit, sit amet fermentum dui vulputate sit amet. Aenean a eros nec arcu tempus consectetur id cursus quam. Cras quis arcu pellentesque, fringilla nisl vitae, accumsan elit. Praesent nec semper velit, a posuere diam. Quisque in arcu eros. Vivamus venenatis purus risus, ut vehicula turpis ullamcorper nec. Morbi purus leo, lobortis sollicitudin mi sit amet, blandit aliquet orci. Donec tincidunt consequat felis vitae bibendum. Ut porttitor ante eget dui volutpat venenatis. Mauris eget euismod neque, dapibus blandit eros. Cras condimentum metus ac mi tempor, in commodo orci vestibulum. Aliquam a ultricies leo. Integer quis auctor ligula. Nulla sed congue justo.
EOT,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
            $builder->insert($row);
        }
    }
}
