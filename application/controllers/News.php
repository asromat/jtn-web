<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("news_m");
	}

	// Beranda
	public function index()
	{
		$data['headline'] = $this->news_m->getHeadline();
		$data['hukum'] = $this->news_m->getCategory("hukum dan kriminalitas");
		$data['pendidikan'] = $this->news_m->getCategory("pendidikan");
		$data['olahraga'] = $this->news_m->getCategory("olahraga");
		$data['pemerintahan'] = $this->news_m->getCategory("pemerintahan");
		$data['gaya'] = $this->news_m->getCategory("Gaya Hidup");
		$data['footer_script'] = "footer/beranda";
		$this->template->load('template/main', 'tampilan/beranda', $data);
	}
	
	// Untuk Search tag, kanal, dan fokus nantinya
	public function kanal()
	{
		$data['kanal'] = $this->uri->segment("2");
		$data['headline'] = $this->news_m->getHeadline();
		$data['footer_script'] = "footer/search";
		$this->template->load('template/main', 'tampilan/search', $data);
	}
	
	// Untuk detail berita
	public function detail()
	{
		//Cek URL Lama atau Terbaru
		$versionData = $this->fungsi->cekUrl();
		
		$data['data'] = $this->news_m->getDetail($versionData['id'])[0];
		// $data['footer_script'] = "footer/bera	nda";
		$data['headline'] = $this->news_m->getHeadline();
		$data['similar'] = $this->news_m->getSimilar("arema",$data['data']['catnews_id']);
		// test($data['similar']);
		$data['satukanal'] = $this->news_m->getSameCategory($data['data']['catnews_id']);
		$data['kategori'] = $this->news_m->getCategoryData("catnews_id",$data['data']['catnews_id'])[0]['catnews_title'];
		$data['editor'] = $this->fungsi->getProfile("editor",$data['data']['editor_id'])[0]['editor_name'];
		$this->template->load('template/main', 'tampilan/detail', $data);
		
	}
	
	// Load More Beranda
	public function loadMore()
	{
		$output = '';
		$data = $this->news_m->getAll($this->input->post("limit"),$this->input->post("start"));
		if ($data > 0) {
			foreach ($data as $key => $row) {
				$output .= '
				<a href="'.base_url().'baca/'.$row['news_id'].'/'.$this->fungsi->timeToStr("Ymd",$row['news_datepub']).'/'.$this->fungsi->timeToStr("his",$row['news_datepub']).'/'. $this->fungsi->convertToSlug($row['news_title']).'"
				<div class="item">
					<div class="imageWrapper">
						<img src="'.$this->fungsi->imageThumbnail($row['news_image_new'], "th").'" alt="image" class="imaged w100">
					</div>
					<div class="in">
						<div>
							<header class="text-primary fn80 text-uppercase font-weight-bold">
							</header>
							<h3>'.$row['news_title'].'</h3>
							<div class="text-muted d-block fn60">
								<ion-icon name="time-outline"></ion-icon>'.$this->fungsi->timeAgo($row['news_datepub']).'</span>
							</div>

						</div>
					</div>
				</div>
				</a>
                ';
			}
		}
		echo $output;
	}

	// Load more category, tag, dll
	public function loadMoreCat()
	{
		$output = '';
		$data = $this->news_m->getCategory($this->input->post("kanal"),$this->input->post("limit"),$this->input->post("start"));
		if ($data > 0) {
			foreach ($data as $key => $row) {
				$output .= '
				<a href="'.base_url().'baca/'.$row['news_id'].'/'.$this->fungsi->timeToStr("Ymd",$row['news_datepub']).'/'.$this->fungsi->timeToStr("his",$row['news_datepub']).'/'. $this->fungsi->convertToSlug($row['news_title']).'"
				<div class="item">
					<div class="imageWrapper">
						<img src="'.$this->fungsi->imageThumbnail($row['news_image_new'], "th").'" alt="image" class="imaged w100">
					</div>
					<div class="in">
						<div>
							<header class="text-primary fn80 text-uppercase font-weight-bold">'.urldecode($this->input->post("kanal")).'
							</header>
							<h3>'.$row['news_title'].'</h3>
							<div class="text-muted d-block fn60">
								<ion-icon name="time-outline"></ion-icon>'.$this->fungsi->timeAgo($row['news_datepub']).'</span>
							</div>

						</div>
					</div>
				</div>
				</a>
                ';
			}
		}
		echo $output;
	}
}
