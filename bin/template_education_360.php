<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EducationController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        // ...
    }

    /**
     * @Route("/article/{slug}", name="")
     */
    public function show(string $slug): Response
    {
        // ...
    }
}

<!DOCTYPE html>
<html lang="fr">

<a href="{{ path('blog_index') }}">Homepage</a>

{# ... #}

{% for post in blog_posts %}
    <h1>
        <a href="{{ path('blog_post', {slug: post.slug}) }}">{{ post.title }}</a>
    </h1>

    <p>{{ post.excerpt }}</p>
{% endfor %}

composer require symfony/asset

<img src="{{ asset('img/logo.png') }}" alt="Symfony!"/>

<link href="{{ asset('css/style_2.css') }}" rel="stylesheet"/>

<script src="{{ asset('bundles/acme/js/fourth_block.js') }}"></script>
<script src="{{ asset('bundles/acme/js/fourth_block_2.js') }}"></script>
<script src="{{ asset('bundles/acme/js/nav_bar.js') }}"></script>

?>