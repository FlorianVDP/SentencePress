<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppArticles extends Fixture
{
    public $catRepo;

    /**
     * AppSubcategory constructor.
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->catRepo = $articleRepository;
    }
    public function load(ObjectManager $manager): void
    {
        $dataArticles = [
            [
                "name" => "Why Playstation is better than Xbox",
                "slug_subcat" => "playstation-5",
                "content" =>
                    "
                    <h1>Ceci est un article qui parle de rien</h1>
<h2>On va surtout mettre du Lorem</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>J'aime la biere</h3>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>Pourquoi Clémence est au dessus de la moyenne ?</h3>
<ul>
    <li>Parcequ'elle est veille</li>
    <li>Parceque elle à un grand p****</li>
    <li>Parceque Pastèque est méchante</li>
</ul>
                    ",
                "slug" => "unslug"
            ],
            [
                "name" => "Why Playstation is better than Xbox",
                "slug_subcat" => "nintendo-ds",
                "content" =>
                    "
                    <h1>Ceci est un article qui parle de rien</h1>
<h2>On va surtout mettre du Lorem</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>J'aime la biere</h3>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>Pourquoi Clémence est au dessus de la moyenne ?</h3>
<ul>
    <li>Parcequ'elle est veille</li>
    <li>Parceque elle à un grand p****</li>
    <li>Parceque Pastèque est méchante</li>
</ul>
                    ",
                "slug" => "unslugnul"
            ],
            [
                "name" => "Why Playstation is better than Xbox",
                "slug_subcat" => "xbox",
                "content" =>
                    "
                    <h1>Ceci est un article qui parle de rien</h1>
<h2>On va surtout mettre du Lorem</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>J'aime la biere</h3>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>Pourquoi Clémence est au dessus de la moyenne ?</h3>
<ul>
    <li>Parcequ'elle est veille</li>
    <li>Parceque elle à un grand p****</li>
    <li>Parceque Pastèque est méchante</li>
</ul>
                    ",
                "slug" => "playstfezfgzretation"
            ],
            [
                "name" => "Why Playstation is better than Xbox",
                "slug_subcat" => "windows",
                "content" =>
                    "
                    <h1>Ceci est un article qui parle de rien</h1>
<h2>On va surtout mettre du Lorem</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>J'aime la biere</h3>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>Pourquoi Clémence est au dessus de la moyenne ?</h3>
<ul>
    <li>Parcequ'elle est veille</li>
    <li>Parceque elle à un grand p****</li>
    <li>Parceque Pastèque est méchante</li>
</ul>
                    ",
                "slug" => "fdsfdsfdsfdsfsdfsdfdsdsfrfezf"
            ],
            [
                "name" => "Why Playstation is better than Xbox",
                "slug_subcat" => "mac-os",
                "content" =>
                    "
                    <h1>Ceci est un article qui parle de rien</h1>
<h2>On va surtout mettre du Lorem</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>J'aime la biere</h3>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed interdum diam. Duis blandit, lacus gravida scelerisque commodo, diam ligula tempor metus, et hendrerit augue nisl sed dui. Morbi tincidunt vitae ligula non laoreet. Nulla lacinia cursus venenatis. Nulla ac semper sem. Suspendisse porta nulla feugiat rutrum egestas. Integer scelerisque diam sed neque viverra, ac viverra turpis iaculis. Suspendisse vel mauris eget lectus lobortis finibus et at est. Donec posuere sapien velit, eu pulvinar mi eleifend in. Maecenas posuere nisi sit amet bibendum pulvinar. Integer eleifend diam diam, a aliquet mi faucibus aliquam. Aliquam sodales nulla ipsum. Nam tristique nulla at enim pulvinar porta. Aliquam facilisis orci ut libero pulvinar, sit amet ultricies nunc accumsan. Donec commodo ipsum felis, non posuere leo aliquet a.
</p>
<h3>Pourquoi Clémence est au dessus de la moyenne ?</h3>
<ul>
    <li>Parcequ'elle est veille</li>
    <li>Parceque elle à un grand p****</li>
    <li>Parceque Pastèque est méchante</li>
</ul>
                    ",
                "slug" => "dfsfdsfdsfdsfd"
            ],
        ];
        foreach ($dataArticles as $dataArticle){

            //$category = $this->catRepo->findOneBy(array('name' => $subCategory["category"]));
            $article = new Article();
            $article -> setName($dataArticle["name"]);
            $article -> setSlug($dataArticle["slug"]);
            $article -> setContent($dataArticle["content"]);
            $article -> addSlugCat($dataArticle["slug_subcat"]);

            $manager->persist($article);
            $manager->flush();
        }
    }
}
