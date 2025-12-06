<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="About Us" />

    <div class="min-vh-100 d-flex flex-column">
        <!-- Navbar Component -->
        <Navbar current-page="about" />

        <!-- Page Header -->
        <section class="bg-light py-5 text-primary">
            <div class="container text-center">
                <h1 class="display-4 fw-bold mb-3">About Tech Bytes</h1>
                <p class="lead text-dark">
                    Innovating the future of technology, one byte at a time
                </p>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="mb-4">Our Mission</h2>
                        <p class="lead">
                            To provide cutting-edge technology solutions that
                            empower individuals and businesses to achieve their
                            full potential in the digital age.
                        </p>
                        <p>
                            We believe in making technology accessible,
                            affordable, and easy to use for everyone. Our
                            commitment is to deliver exceptional products and
                            services that exceed customer expectations.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <i class="bi bi-bullseye display-1 text-primary"></i>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 text-center">
                        <i class="bi bi-eye display-1 text-success"></i>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <h2 class="mb-4">Our Vision</h2>
                        <p class="lead">
                            To be the leading technology provider recognized for
                            innovation, quality, and customer satisfaction
                            worldwide.
                        </p>
                        <p>
                            We envision a world where technology seamlessly
                            integrates into daily life, making tasks easier,
                            communication faster, and possibilities endless.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section class="bg-light py-5">
            <div class="container">
                <h2 class="mb-5 text-center">Our Core Values</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="bi bi-lightbulb display-4 text-warning mb-3"></i>
                            <h5>Innovation</h5>
                            <p class="text-muted">
                                Constantly pushing boundaries and exploring new
                                possibilities
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="bi bi-star display-4 mb-3 text-primary"></i>
                            <h5>Excellence</h5>
                            <p class="text-muted">
                                Committed to delivering the highest quality in
                                everything we do
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="bi bi-people display-4 text-success mb-3"></i>
                            <h5>Customer Focus</h5>
                            <p class="text-muted">
                                Your satisfaction is our top priority
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="bi bi-shield-check display-4 text-info mb-3"></i>
                            <h5>Integrity</h5>
                            <p class="text-muted">
                                Building trust through transparency and honesty
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="mb-5 text-center">Meet Our Team</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <i class="bi bi-person-circle display-1 text-success"></i>
                                </div>
                                <h5 class="card-title">Kyle Fajardo Baluyot</h5>
                                <p class="mb-2 text-muted">Developer</p>
                                <p class="small">
                                    Full-stack developer in progress, focused on building end-to-end solutions for
                                    academic and client projects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="bg-primary py-5 text-white">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-md-0 mb-4">
                        <h2 class="display-4 fw-bold ">10K+</h2>
                        <p>Happy Customers</p>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-4">
                        <h2 class="display-4 fw-bold">500+</h2>
                        <p>Products</p>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-4">
                        <h2 class="display-4 fw-bold">24/7</h2>
                        <p>Support</p>
                    </div>
                    <div class="col-md-3">
                        <h2 class="display-4 fw-bold">99%</h2>
                        <p>Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Component -->
        <Footer />
    </div>
</template>

<style scoped>
/* bootstrap-icons imported globally from node_modules in resources/js/app.ts */
</style>
