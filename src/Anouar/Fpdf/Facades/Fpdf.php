<?php namespace Anouar\Fpdf\Facades;

use Illuminate\Support\Facades\Facade;
 
class Fpdf extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'fpdf'; }
 
}