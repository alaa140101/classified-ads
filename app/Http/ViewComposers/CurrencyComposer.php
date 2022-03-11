<?php 
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Currency;

class CurrencyComposer
{
  protected $currencies;

  public function __construct()
  {
    $this->currencies = Currency::all();
  }

  public function compose(View $view)
  {
    return $view->with('currencies', $this->currencies);
  }
}