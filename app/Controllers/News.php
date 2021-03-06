<?php

namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
        public function index()
{
        $model = new NewsModel();

        $data = [
                'news'  => $model->getNews(),
                'title' => 'News archive',
        ];

        echo view('templates/header', $data);
        echo view('news/index', $data);
        echo view('templates/footer');
}

		public function view($slug = NULL)
		{
				$model = new NewsModel();

				$data['news'] = $model->getNews($slug);

				if (empty($data['news']))
				{
						throw new \CodeIgniter\PageNotFoundException('Cannot find the page: '. $slug);
				}

				$data['title'] = $data['news']['title'];

				echo view('templates/header', $data);
				echo view('news/view', $data);
				echo view('templates/footer');
		}
}