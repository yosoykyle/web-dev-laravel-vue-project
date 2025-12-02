<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = ref({
    name: '',
    email: '',
    subject: '',
    message: '',
});

const submitted = ref(false);

const handleSubmit = () => {
    // In a real app, this would send data to backend
    submitted.value = true;
    setTimeout(() => {
        submitted.value = false;
        form.value = { name: '', email: '', subject: '', message: '' };
    }, 3000);
};
</script>

<template>
    <Head title="Contact Us" />

    <div class="min-vh-100 d-flex flex-column">
        <!-- Navbar Component -->
        <Navbar current-page="contact" />

        <!-- Page Header -->
        <section class="bg-light py-5 text-primary">
            <div class="container text-center">
                <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                <p class="lead text-dark">
                    We'd love to hear from you. Get in touch with our team!
                </p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-5">
            <div class="container">
                <div class="row g-5">
                    <!-- Contact Form -->
                    <div class="col-lg-7">
                        <h2 class="mb-4">Send us a Message</h2>

                        <div
                            v-if="submitted"
                            class="alert alert-success"
                            role="alert"
                        >
                            <i class="bi bi-check-circle"></i> Thank you! Your
                            message has been sent successfully.
                        </div>

                        <form @submit.prevent="handleSubmit">
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Full Name *</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    v-model="form.name"
                                    required
                                    placeholder="San Juan"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Email Address *</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    v-model="form.email"
                                    required
                                    placeholder="juan@example.com"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label"
                                    >Subject *</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="subject"
                                    v-model="form.subject"
                                    required
                                    placeholder="How can we help you?"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label"
                                    >Message *</label
                                >
                                <textarea
                                    class="form-control"
                                    id="message"
                                    rows="5"
                                    v-model="form.message"
                                    required
                                    placeholder="Tell us more about your inquiry..."
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-primary btn-lg"
                            >
                                <i class="bi bi-send"></i> Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-lg-5">
                        <h2 class="mb-4">Contact Information</h2>

                        <div class="card mb-4 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start mb-4">
                                    <i
                                        class="bi bi-geo-alt-fill fs-3 me-3 text-primary"
                                    ></i>
                                    <div>
                                        <h5 class="mb-1">Address</h5>
                                        <p class="mb-0 text-muted">
                                            143 I love Tech Bytes<br />
                                            PUPSPC, SPCL 4023<br />
                                            Philippines
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-4">
                                    <i
                                        class="bi bi-envelope-fill fs-3 me-3 text-primary"
                                    ></i>
                                    <div>
                                        <h5 class="mb-1">Email</h5>
                                        <p class="mb-0 text-muted">
                                            <a href="mailto: kylebaluyot2018@gmail.com">kylebaluyot2018@gmail.com</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-4">
                                    <i
                                        class="bi bi-telephone-fill fs-3 me-3 text-primary"
                                    ></i>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <p class="mb-0 text-muted">
                                            +63 929 131 0001<br />
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start">
                                    <i
                                        class="bi bi-clock-fill fs-3 me-3 text-primary"
                                    ></i>
                                    <div>
                                        <h5 class="mb-1">Business Hours</h5>
                                        <p class="mb-0 text-muted">
                                            Monday - Friday: 9:00 AM - 6:00
                                            PM<br />
                                            Saturday: 10:00 AM - 4:00 PM<br />
                                            Sunday: Closed
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h5 class="mb-3">Follow Us</h5>
                                <div class="d-flex gap-3">
                                    <a
                                        target="_blank"
                                        href="https://www.facebook.com/bkyle.2005"
                                        class="btn btn-outline-primary btn-lg"
                                    >
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a
                                        target="_blank"
                                        href="https://www.instagram.com/bkyle.2005/"
                                        class="btn btn-outline-danger btn-lg"
                                    >
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a
                                        target="_blank"
                                        href="http://github.com/yosoykyle"
                                        class="btn btn-outline-dark btn-lg"
                                    >
                                        <i class="bi bi-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
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
