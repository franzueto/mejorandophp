<?php

use HireMe\Repositories\CandidateRepo;

class HomeController extends BaseController {

	protected $candidateRepo;

	public function __construct(CandidateRepo $candidateRepo)
	{
		$this->candidateRepo = $candidateRepo;
	}

	public function index()
	{
		$last_candidates = $this->candidateRepo->findLatest();

		return View::make('home', compact('last_candidates'));
	}

}
