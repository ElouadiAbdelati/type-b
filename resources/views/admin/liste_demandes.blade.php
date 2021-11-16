@extends('layouts.main_admin')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Demandes courantes/acceptées/refusées</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Activities</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">{{ date('d-m-Y H:i') }}</h2>
        <div class="row">
            <div class="col-6">
                <div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            <i class="">2</i>
                        </div>
                        <div class="activity-detail">
                            <div class="mb-2">
                                <span class="text-job text-primary">2 min ago</span>
                                <span class="bullet"></span>
                                <a href="#" class="text-job has-icon"><i class="fas fa-pen"></i> Modifier</a>
                                <div class="float-right dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-title">Options</div>
                                        <a href="#" class="dropdown-item has-icon text-success"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-check"></i> Accepter</a>
                                        <a href="#" class="dropdown-item has-icon text-danger"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-times"></i> Refuser</a>
                                        <a href="#" class="dropdown-item has-icon text-info"><i class="fas fa-list"></i>
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item has-icon text-warning"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-archive"></i>
                                            Archive</a>
                                    </div>
                                </div>
                            </div>
                            <p>Have commented on the task of "<a href="#">Responsive design</a>".</p>
                        </div>
                    </div>
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            <i class="">2</i>
                        </div>
                        <div class="activity-detail">
                            <div class="mb-2">
                                <span class="text-job text-primary">2 min ago</span>
                                <span class="bullet"></span>
                                <a href="#" class="text-job has-icon"><i class="fas fa-pen"></i> Modifier</a>
                                <div class="float-right dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-title">Options</div>
                                        <a href="#" class="dropdown-item has-icon text-success"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-check"></i> Accepter</a>
                                        <a href="#" class="dropdown-item has-icon text-danger"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-times"></i> Refuser</a>
                                        <a href="#" class="dropdown-item has-icon text-info"><i class="fas fa-list"></i>
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item has-icon text-warning"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-archive"></i>
                                            Archive</a>
                                    </div>
                                </div>
                            </div>
                            <p>Have commented on the task of "<a href="#">Responsive design</a>".</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="activities">
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            <i class="">2</i>
                        </div>
                        <div class="activity-detail">
                            <div class="mb-2">
                                <span class="text-job text-primary">2 min ago</span>
                                <span class="bullet"></span>
                                <a href="#" class="text-job has-icon"><i class="fas fa-pen"></i> Modifier</a>
                                <div class="float-right dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-title">Options</div>
                                        <a href="#" class="dropdown-item has-icon text-success"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-check"></i> Accepter</a>
                                        <a href="#" class="dropdown-item has-icon text-danger"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-times"></i> Refuser</a>
                                        <a href="#" class="dropdown-item has-icon text-info"><i class="fas fa-list"></i>
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item has-icon text-warning"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-archive"></i>
                                            Archive</a>
                                    </div>
                                </div>
                            </div>
                            <p>Have commented on the task of "<a href="#">Responsive design</a>".</p>
                        </div>
                    </div>
                    <div class="activity">
                        <div class="activity-icon bg-primary text-white shadow-primary">
                            <i class="">2</i>
                        </div>
                        <div class="activity-detail">
                            <div class="mb-2">
                                <span class="text-job text-primary">2 min ago</span>
                                <span class="bullet"></span>
                                <a href="#" class="text-job has-icon"><i class="fas fa-pen"></i> Modifier</a>
                                <div class="float-right dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-title">Options</div>
                                        <a href="#" class="dropdown-item has-icon text-success"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-check"></i> Accepter</a>
                                        <a href="#" class="dropdown-item has-icon text-danger"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-times"></i> Refuser</a>
                                        <a href="#" class="dropdown-item has-icon text-info"><i class="fas fa-list"></i>
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item has-icon text-warning"
                                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-archive"></i>
                                            Archive</a>
                                    </div>
                                </div>
                            </div>
                            <p>Have commented on the task of "<a href="#">Responsive design</a>".</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
