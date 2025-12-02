<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const selectedCategory = ref('all');

const products = [
    {
        id: 1,
        name: 'MacBook Pro 16" M5',
        category: 'laptops',
        price: 2499,
        image: '💻',
        description: 'Powerful laptop for professionals',
    },
    {
        id: 2,
        name: 'iPhone 17 Pro Max',
        category: 'phones',
        price: 1999,
        image: '📱',
        description: 'Latest flagship smartphone',
    },
    {
        id: 3,
        name: 'AirPods Pro 2nd Gen',
        category: 'accessories',
        price: 349,
        image: '🎧',
        description: 'Premium wireless earbuds',
    },
    {
        id: 4,
        name: 'Dell XPS 15',
        category: 'laptops',
        price: 1999,
        image: '💻',
        description: 'High-performance Windows laptop',
    },
    {
        id: 5,
        name: 'Samsung Galaxy S25 Ultra',
        category: 'phones',
        price: 1999,
        image: '📱',
        description: 'Android flagship device',
    },
    {
        id: 6,
        name: 'Magic Mouse',
        category: 'accessories',
        price: 190,
        image: '🖱️',
        description: 'Wireless rechargeable mouse',
    },
    {
        id: 7,
        name: 'Adobe Creative Cloud',
        category: 'software',
        price: 154.99,
        image: '🎨',
        description: 'Complete creative suite',
    },
    {
        id: 8,
        name: 'Microsoft 365',
        category: 'software',
        price: 169.99,
        image: '📊',
        description: 'Productivity software bundle',
    },
    {
        id: 9,
        name: 'Mechanical Keyboard',
        category: 'accessories',
        price: 179,
        image: '⌨️',
        description: 'RGB gaming keyboard',
    },
];

const filteredProducts = () => {
    if (selectedCategory.value === 'all') {
        return products;
    }
    return products.filter((p) => p.category === selectedCategory.value);
};
</script>

<template>
    <Head title="Products & Services" />

    <div class="min-vh-100 d-flex flex-column">
        <!-- Navbar Component -->
        <Navbar current-page="products" />

        <!-- Page Header -->
        <section class="bg-light py-5 text-primary">
            <div class="container text-center">
                <h1 class="display-4 fw-bold mb-3">Products & Services</h1>
                <p class="lead text-dark">
                    Discover our wide range of cutting-edge technology products
                </p>
            </div>
        </section>

        <!-- Products Section -->
        <section class="py-5">
            <div class="container">
                <!-- Category Filter -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="btn-group" role="group">
                            <button
                                type="button"
                                class="btn"
                                :class="
                                    selectedCategory === 'all'
                                        ? 'btn-success'
                                        : 'btn-outline-success'
                                "
                                @click="selectedCategory = 'all'"
                            >
                                All Products
                            </button>
                            <button
                                type="button"
                                class="btn"
                                :class="
                                    selectedCategory === 'laptops'
                                        ? 'btn-success'
                                        : 'btn-outline-success'
                                "
                                @click="selectedCategory = 'laptops'"
                            >
                                Laptops
                            </button>
                            <button
                                type="button"
                                class="btn"
                                :class="
                                    selectedCategory === 'phones'
                                        ? 'btn-success'
                                        : 'btn-outline-success'
                                "
                                @click="selectedCategory = 'phones'"
                            >
                                Phones
                            </button>
                            <button
                                type="button"
                                class="btn"
                                :class="
                                    selectedCategory === 'accessories'
                                        ? 'btn-success'
                                        : 'btn-outline-success'
                                "
                                @click="selectedCategory = 'accessories'"
                            >
                                Accessories
                            </button>
                            <button
                                type="button"
                                class="btn"
                                :class="
                                    selectedCategory === 'software'
                                        ? 'btn-success'
                                        : 'btn-outline-success'
                                "
                                @click="selectedCategory = 'software'"
                            >
                                Software
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="row g-4">
                    <div
                        v-for="product in filteredProducts()"
                        :key="product.id"
                        class="col-md-6 col-lg-4"
                    >
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <div class="display-1 mb-3">
                                    {{ product.image }}
                                </div>
                                <h5 class="card-title">{{ product.name }}</h5>
                                <p class="card-text text-muted">
                                    {{ product.description }}
                                </p>
                                <p class="h4 mb-3 text-primary">
                                    ${{ product.price }}
                                </p>
                                <button class="btn btn-warning w-100">
                                    <i class="bi bi-cart-plus"></i> Buy
                                </button>
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
