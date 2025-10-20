<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function jobs() {
        $jobs = [
            ['id'=>1,'title'=>'Web Developer','company'=>'PT Netlink','budget'=>'Rp3.000.000','desc'=>'Membuat landing page modern.'],
            ['id'=>2,'title'=>'Mobile App Designer','company'=>'PT Kreatif','budget'=>'Rp4.500.000','desc'=>'Desain UI aplikasi Android.'],
            ['id'=>3,'title'=>'Backend Engineer','company'=>'PT Serverku','budget'=>'Rp5.000.000','desc'=>'Bangun API untuk sistem internal.'],
        ];
        return view('jobs.index', compact('jobs'));
    }

    public function jobDetail($id) {
        $job = ['id'=>$id, 'title'=>'Web Developer', 'company'=>'PT Netlink', 'budget'=>'Rp3.000.000', 'desc'=>'Deskripsi lengkap proyek ini...'];
        return view('jobs.show', compact('job'));
    }

    public function clientDashboard() {
        return view('dashboard.client');
    }

    public function freelancerDashboard() {
        return view('dashboard.freelancer');
    }

    public function profile() {
        return view('profile');
    }
}
