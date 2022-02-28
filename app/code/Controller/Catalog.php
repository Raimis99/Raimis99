<?php

namespace Controller;

use Core\AbstractController;
use Helper\FormHelper;
use Helper\Logger;
use Model\Comment;
use Helper\Url;
use Model\Ad;
use Core\Interface\ControllerInterface;
class Catalog extends AbstractController implements ControllerInterface
{
    public function index()
    {
        $this->data['count'] = Ad::count();
        $page = 0;
        if(isset($_GET['p'])){
            $page = (int)$_GET['p'] -1;
        }

        $this->data['ads'] = Ad::getAllAds($page * 2, 2);
        $this->render('catalog/all');
    }

    public function add()
    {
        if(!isset($_SESSION['user_id'])){
            Url::redirect('');
        }
        $form = new FormHelper('catalog/create','POST');
        $form->input([
            'name'=>'title',
            'type'=>'text',
            'placeholder'=>'Pavadinimas'
        ]);
        $form->textArea('description',' Aprasymas');
        $form->input([
            'name'=>'price',
            'type'=>'text',
            'placeholder'=>'Kaina'
        ]);
        $form->input([
            'name' => 'year',
            'type' => 'text',
            'placeholder' => 'Metai'
        ]);
        $form->input([
            'name'=>'image',
            'type'=>'text',
            'placeholder'=>'Paveikslelis'

        ]);
        $form->input([
            'name'=>'vin',
            'type'=>'text',
            'placeholder'=>'vin'
        ]);
        $form->input([
            'name'=>'gearbox',
            'type'=>'text',
            'placeholder'=>'Pavaru deze'
        ]);
        $form->input([
            'name'=>'fuel',
            'type'=>'text',
            'placeholder'=>'Kuro Tipas'
        ]);
        $form->input([
            'name'=>'kilometers',
            'type'=>'text',
            'placeholder'=>'Rida'
        ]);
        $form->input([
            'type'=>'submit',
            'value'=>'sukurti',
            'name'=>'create'
        ]);


        $this->data['form'] = $form->getForm();
        $this->render('catalog/create');


    }

    public function create()
    {
        $slug= Url::slug($_POST['title']);
        while(!Ad::isValueUnic('slug',$slug)){
            $slug=$slug . rand(0,100);
    }

        $ad = new Ad();
        $ad->setTitle($_POST['title']);
        $ad->setSlug($slug);
        $ad->setDescription($_POST['description']);
        $ad->setManufacturerId(1);
        $ad->setModelId(1);
        $ad->setPrice($_POST['price']);
        $ad->setYear($_POST['year']);
        $ad->setImage($_POST['image']);
        $ad->setActive(1);
        $ad->setTypeId(1);
        $ad->setUserId($_SESSION['user_id']);
        $ad->setVin($_POST['vin']);
        $ad->setViews(0);
        $ad->setGearbox($_POST['gearbox']);
        $ad->setFuel($_POST['fuel']);
        $ad->setKilometers($_POST['kilometers']);
        $ad->save();
    }

    public function edit($id)
    {
        if(!isset($_SESSION['user_id'])) {
            Url::redirect('');
        }
        $ad = new Ad();
        $ad->load($id);

        if ($_SESSION['user_id'] != $ad->getUserId()){
            Url::redirect('');
        }

        $form = new FormHelper('catalog/update', 'POST');
        $form->input([
            'name' => 'title',
            'type' => 'text',
            'placeholder' => 'Pavadinimas',
            'value' => $ad->getTitle()
        ]);

        $form->input([
            'name' => 'id',
            'type' => 'hiden',
            'value' => $ad->getId()

        ]);

        $form->textArea('description', $ad->getDescription());
        $form->input([
            'name' => 'price',
            'type' => 'text',
            'placeholder' => 'Kaina',
            'value' => $ad->getPrice()
        ]);
        $form->input([
            'name'=>'image',
            'type'=>'text',
            'placeholder'=>'Kaina',
            'value'=>$ad->getImage()
        ]);
        $form->input([
            'name' => 'year',
            'type' => 'text',
            'placeholder' => 'Metai',
            'value' => $ad->getYear()
        ]);
        $form->input([
            'name'=>'vin',
            'type'=>'text',
            'placeholder'=>'vin',
            'value'=> $ad->getVin()
        ]);
        $form->input([
            'name'=>'gearbox',
            'type'=>'text',
            'placeholder'=>'Pavaru deze',
            'value' => $ad->getGearbox()
        ]);
        $form->input([
            'name'=>'fuel',
            'type'=>'text',
            'placeholder'=>'Kuro Tipas',
            'value'=> $ad->getFuel()
        ]);
        $form->input([
            'name'=>'kilometers',
            'type'=>'text',
            'placeholder'=>'Rida',
            'value' => $ad->getKilometers()
        ]);
        $form->input([
            'type' => 'submit',
            'value' => 'sukurti',
            'name' => 'create'
        ]);
        $this->data['form'] = $form->getForm();
        $this->render('catalog/create');
    }
    public function update()
    {
        $adId = $_POST['id'];
        $ad =new Ad();
        $ad->load($adId);
        $ad->setTitle($_POST['title']);
        $ad->setDescription($_POST['description']);
        $ad->setManufacturerId(1);
        $ad->setModelId(1);
        $ad->setImage($_POST['image']);
        $ad->setPrice($_POST['price']);
        $ad->setYear($_POST['year']);
        $ad->setTypeId(1);
        $ad->setVin($_POST['vin']);
        $ad->setGearbox($_POST['gearbox']);
        $ad->setFuel($_POST['fuel']);
        $ad->setKilometers($_POST['kilometers']);
        $ad->save();


    }


    public function show($slug)
    {
        $ad = new Ad();
        $ad->loadBySlug($slug);
        $newViews = (int)$ad->getViews() +1;
        $ad->setViews($newViews);
        $ad->save();
        $this->data['ad'] = $ad;
        $this->data['title'] = $ad->getTitle();
        $this->data['meta_description'] = $ad->getDescription();
        if ($this->data['ad']) {
            $this->render('catalog/single');
        } else {
            $this->render('parts/errors/error404');
        }
    }
    public function comment()
    {



    }

}
