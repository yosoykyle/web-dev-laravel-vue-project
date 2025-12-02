<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="bg-light py-4 text-dark mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-3">
                    <h5 class="fw-bold">
                        <i class="bi bi-cpu text-primary"></i> Tech Bytes
                    </h5>
                    <p class="mb-2 text-muted">
                        Your trusted technology partner since 2025.
                    </p>
                    <p class="small text-muted">
                        Innovating the future of technology, one byte at a time.
                    </p>
                </div>

                <div class="col-md-4 mb-md-0 mb-3">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled text-primary">
                        <li class="mb-2">
                            <Link
                                href="/"
                                class="text-dark text-decoration-none hover-link"
                            >
                                <i class="bi bi-house-door"></i> Home
                            </Link>
                        </li>
                        <li class="mb-2">
                            <Link
                                href="/products"
                                class="text-dark text-decoration-none hover-link"
                            >
                                <i class="bi bi-cart"></i> Products
                            </Link>
                        </li>
                        <li class="mb-2">
                            <Link
                                href="/about"
                                class="text-dark text-decoration-none hover-link"
                            >
                                <i class="bi bi-info-circle"></i> About Us
                            </Link>
                        </li>
                        <li class="mb-2">
                            <Link
                                href="/contact"
                                class="text-dark text-decoration-none hover-link"
                            >
                                <i class="bi bi-envelope"></i> Contact
                            </Link>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h6 class="fw-bold mb-3">Connect With Us</h6>
                    <div class="d-flex mb-3 gap-3 text-info">
                        <a
                            target="_blank"
                            href="https://www.facebook.com/bkyle.2005"
                            class="text-primary"
                            aria-label="Facebook"
                        >
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a
                            target="_blank"
                            href="https://www.instagram.com/bkyle.2005/"
                            class="text-danger"
                            aria-label="Instagram"
                        >
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <a
                            target="_blank"
                            href="https://github.com/bkyle2005"
                            class="text-dark"
                            aria-label="Github"
                        >
                            <i class="bi bi-github fs-4"></i>
                        </a>
                    </div>
                    <p class="small mb-0 text-muted">
                        &copy; 2025 Tech Bytes. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
/* bootstrap-icons imported globally from node_modules in resources/js/app.ts */

.hover-link {
    transition: color 0.2s ease;
}

.hover-link:hover {
    color: var(--foreground) !important;
}

footer a:hover i {
    transform: scale(1.1);
    transition: transform 0.2s ease;
}
</style>
