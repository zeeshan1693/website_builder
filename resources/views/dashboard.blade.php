@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<main class="container py-5">
        <!-- Welcome Section -->
        <div class="mb-5 fade-in">
            <h1 class="display-5 fw-bold mb-2">Welcome back! 👋</h1>
            <p class="text-muted">Manage your websites and create new ones</p>
        </div>

        <!-- Create New Button -->
        <div class="mb-5 fade-in">
            <a href="editor.html" class="btn btn-gradient btn-lg">
                <i class="bi bi-plus-lg me-2"></i>
                Create New Website
            </a>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-md-6 col-lg-4 fade-in">
                <div class="card project-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title fw-bold mb-1">Portfolio Website</h5>
                                <p class="text-muted small mb-0">
                                    <i class="bi bi-globe me-1"></i>
                                    portfolio.com
                                </p>
                            </div>
                            <span class="status-badge status-published">Published</span>
                        </div>
                        <div class="project-preview mb-3"></div>
                        <p class="text-muted small mb-3">Last edited 2 hours ago</p>
                        <div class="d-flex gap-2">
                            <a href="editor.html" class="btn btn-gradient flex-fill">
                                <i class="bi bi-pencil me-1"></i>
                                Edit
                            </a>
                            <button class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-6 col-lg-4 fade-in">
                <div class="card project-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title fw-bold mb-1">E-commerce Store</h5>
                                <p class="text-muted small mb-0">
                                    <i class="bi bi-globe me-1"></i>
                                    mystore.com
                                </p>
                            </div>
                            <span class="status-badge status-draft">Draft</span>
                        </div>
                        <div class="project-preview mb-3" style="background: linear-gradient(135deg, var(--primary-purple), var(--primary-blue));"></div>
                        <p class="text-muted small mb-3">Last edited 1 day ago</p>
                        <div class="d-flex gap-2">
                            <a href="editor.html" class="btn btn-gradient flex-fill">
                                <i class="bi bi-pencil me-1"></i>
                                Edit
                            </a>
                            <button class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6 col-lg-4 fade-in">
                <div class="card project-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title fw-bold mb-1">Blog Platform</h5>
                                <p class="text-muted small mb-0">
                                    <i class="bi bi-globe me-1"></i>
                                    myblog.com
                                </p>
                            </div>
                            <span class="status-badge status-published">Published</span>
                        </div>
                        <div class="project-preview mb-3" style="background: linear-gradient(135deg, var(--primary-cyan), var(--primary-blue));"></div>
                        <p class="text-muted small mb-3">Last edited 3 days ago</p>
                        <div class="d-flex gap-2">
                            <a href="editor.html" class="btn btn-gradient flex-fill">
                                <i class="bi bi-pencil me-1"></i>
                                Edit
                            </a>
                            <button class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop

@section('popup')
@stop

@section('page-styles')
@stop

@section('page-script')
@stop