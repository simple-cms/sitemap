<?php namespace SimpleCms\Sitemap;

use SimpleCms\Core\BaseController;
use SimpleCms\Tag\RepositoryInterface;
use View;

class PublicController extends BaseController {

  /**
   * Store our RepositoryInterface implementation.
   *
   * @param SimpleCms\Sitemap\EloquentRepository
   */
  protected $tag;

  /**
   * Set up the class
   *
   * @param SimpleCms\Tag\RepositoryInterface $tag
   *
   */
  public function __construct(RepositoryInterface $tag)
  {
    // Call the parent constructor just in case
    parent::__construct();

    // Set up our Model Interface
    $this->tag = $tag;
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function show($slug)
  {
    return View::make('tag::Public/Show', [
      'metaTitle' => 'slug tag title',
      'metaDesciption' => 'slug tag description',
      'tag' => $this->tag->getFirstBy('slug', $slug)
    ]);
  }

}