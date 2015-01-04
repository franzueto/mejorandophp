<?php
/**
 * Created by PhpStorm.
 * User: franz
 * Date: 3/01/15
 * Time: 05:58 PM
 */

namespace HireMe\Repositories;
use HireMe\Entities\Candidate;
use HireMe\Entities\Category;

class CandidateRepo extends BaseRepo{

    public function getModel(){
        return new Candidate;
    }

    public function findLatest($take = 10){
        return Category::with(['candidates' => function($q) use ($take){
            $q->take($take);
            $q->orderBy('created_at', 'Desc');
        },
            'candidates.user'
        ])->get();
    }

}