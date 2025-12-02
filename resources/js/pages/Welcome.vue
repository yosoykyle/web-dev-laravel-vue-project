<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Home" />

    <div class="min-vh-100 d-flex flex-column bg-white">
        <!-- Navbar Component -->
        <Navbar current-page="home" />

        <!-- Hero Section -->
        <section class="bg-white py-5 text-primary">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-3 fw-bold mb-4">
                            Tech Bytes
                        </h1>
                        <p class="lead mb-4 text-dark">
                            Your one-stop shop for cutting-edge technology and
                            innovative solutions. Discover the latest gadgets,
                            software, and tech services.
                        </p>
                        <div class="d-flex gap-3">
                            <a href="/products" class="btn btn-warning btn-lg">
                                Browse Products
                            </a>
                            <a
                                href="/contact"
                                class="btn btn-outline-primary btn-lg"
                            >
                                Get in Touch
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-1 text-center">
                        <i class="bi bi-laptop display-1 text-primary"></i>
                        <i class="bi bi-phone display-1 text-primary"></i>
                        <i class="bi bi-camera display-1 text-primary"></i>
                        <i class="bi bi-watch display-1 text-primary"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5">
            <div class="container py-5">
                <h2 class="mb-5 text-center">Why Choose <i class="text-primary">Tech Bytes?</i></h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <i
                                        class="bi bi-lightning-charge-fill display-4 text-primary"
                                    ></i>
                                </div>
                                <h5 class="card-title">Fast Delivery</h5>
                                <p class="card-text text-muted">
                                    Get your tech products delivered quickly
                                    with our express shipping options.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <i
                                        class="bi bi-shield-check text-success display-4"
                                    ></i>
                                </div>
                                <h5 class="card-title">Quality Guaranteed</h5>
                                <p class="card-text text-muted">
                                    All products are tested and verified for
                                    quality and authenticity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <i
                                        class="bi bi-headset text-info display-4"
                                    ></i>
                                </div>
                                <h5 class="card-title">24/7 Support</h5>
                                <p class="card-text text-muted">
                                    Our dedicated support team is always ready
                                    to help you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class=" py-5">
            <div class="container py-5 text-center">
                <h2 class="mb-4">Ready to Upgrade Your Tech?</h2>
                <p class="lead mb-4">
                    Explore our wide range of products and services today!
                </p>
                <a href="/products" class="btn btn-success btn-lg">
                    View All Products
                </a>
            </div>
        </section>

        <!-- Footer Component -->
        <Footer />
    </div>
</template>

<style scoped>
/* bootstrap-icons imported globally from node_modules in resources/js/app.ts */
</style>
