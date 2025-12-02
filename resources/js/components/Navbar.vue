<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref, onMounted, onBeforeUnmount } from 'vue';

defineProps<{
    currentPage?: string;
}>();

const open = ref(false);
const navRef = ref<HTMLElement | null>(null);
const toggleRef = ref<HTMLElement | null>(null);

const onDocClick = (e: MouseEvent) => {
    const target = e.target as Node | null;
    if (!target) return;
    if (
        !navRef.value?.contains(target) &&
        !toggleRef.value?.contains(target)
    ) {
        open.value = false;
    }
};

onMounted(() => document.addEventListener('click', onDocClick));
onBeforeUnmount(() => document.removeEventListener('click', onDocClick));
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
        <div class="container">
            <Link href="/" class="navbar-brand fw-bold text-dark">
                <i class="bi bi-cpu text-primary"></i> Tech Bytes
            </Link>

            <!-- Use Bootstrap utilities for responsive visibility: hidden on mobile unless `open`, always flex on large screens -->
            <div
                ref="navRef"
                :class="['navbar-collapse', open ? 'd-block d-lg-flex' : 'd-none d-lg-flex']"
                id="navbarNav"
            >
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <Link
                            href="/"
                            class="nav-link"
                            :class="{ active: currentPage === 'home' }"
                        >
                            Home
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link
                            href="/products"
                            class="nav-link"
                            :class="{ active: currentPage === 'products' }"
                        >
                            Products
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link
                            href="/about"
                            class="nav-link"
                            :class="{ active: currentPage === 'about' }"
                        >
                            About
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link
                            href="/contact"
                            class="nav-link"
                            :class="{ active: currentPage === 'contact' }"
                        >
                            Contact
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped>
/* bootstrap-icons imported globally from node_modules in resources/js/app.ts */

.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
}

/* Make navbar links match footer: dark on light background */
.nav-link {
    color: rgba(0, 0, 0, 0.85) !important;
    transition: color 0.2s ease;
}

.nav-link:hover {
    color: rgba(0, 0, 0, 1) !important;
}

.nav-link.active {
    color: rgba(0, 0, 0, 1) !important;
    font-weight: 500;
}
</style>
