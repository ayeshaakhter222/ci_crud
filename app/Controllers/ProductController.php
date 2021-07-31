<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

// use CodeIgniter\HTTP\RequestInterface;

use App\Models\ProductModel;

class ProductController extends ResourceController
{

    /*protected $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }*/

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$products = new ProductModel();

        $products = $products->findAll();

        return view('product/index', compact('products'));
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		//
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		return view('product/new');
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
        $postData = $this->request->getRawInput();
		
        $product = new ProductModel();

        $data = [
           'name' => $postData['name'],
           'price' => $postData['price'],
           // 'description' => $postData['description'],
           'description' => $postData['description'],
           'sku' => md5(uniqid(rand(), true)),
        ];

        ## Insert Record
        if($product->insert($data)){
           session()->setFlashdata('message', 'Added Successfully!');
           session()->setFlashdata('alert-class', 'alert-success');

           return redirect()->to('product'); 
        }else{
           session()->setFlashdata('message', 'Data not saved!');
           session()->setFlashdata('alert-class', 'alert-danger');

           return redirect()->to('product/create')->withInput(); 
        }
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		//
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		//
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		//
	}

    private function generateSku()
    {

    }
}
