<?php 
namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | FeriIrawan'
		];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About Me'
		];
		return view('pages/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact Us',
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Jl.stasiun parung panjang 15330',
					'kota' => 'Tangerang',
				],
				[
					'tipe' => 'Kantor',
					'alamat' => 'Jl.Stasiun jakarta 1990',
					'kota' => 'Jakarta'
				]
			]
		];
		return view('pages/contact', $data);
	}


	//--------------------------------------------------------------------

}
