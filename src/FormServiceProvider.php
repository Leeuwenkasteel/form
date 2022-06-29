<?php
namespace Leeuwenkasteel\Form;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Leeuwenkasteel\Form\View\Components\Open;
use Leeuwenkasteel\Form\View\Components\Close;
use Leeuwenkasteel\Form\View\Components\Input;
use Leeuwenkasteel\Form\View\Components\Checkbox;
use Leeuwenkasteel\Form\View\Components\Select;
use Leeuwenkasteel\Form\View\Components\Checkboxes;

class FormServiceProvider extends ServiceProvider{
    public function boot(){
    	$this->loadViewsFrom(__DIR__.'/resources/views', 'form');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'form');
		
		$this->loadViewComponentsAs('form', [
			Open::class,
            Close::class,
            Input::class,
            Checkbox::class,
            Select::class,
            Checkboxes::class,
		  ]);
    }

    public function register(){
		 
    }
}