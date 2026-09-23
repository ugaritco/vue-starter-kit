<script setup lang="ts">
import { ref } from 'vue';
import KeffiyehPattern from './KeffiyehPattern.vue';

/**
 * Reactive state tracking hover interaction.
 */
const isHovered = ref(false);
</script>

<template>
    <aside
        class="fixed top-0 left-3 sm:left-5 md:left-7 z-40 select-none group"
        aria-label="Palestinian Keffiyeh Solidarity Corner"
        @mouseenter="isHovered = true"
        @mouseleave="isHovered = false"
    >
        <!-- Interactive Link to Keffiyeh Heritage with refined, delicate scale & crisp contrast -->
        <a
            href="https://en.wikipedia.org/wiki/Palestinian_keffiyeh"
            target="_blank"
            rel="noopener noreferrer"
            title="Palestinian Keffiyeh - Symbol of Freedom & Heritage"
            class="relative block w-32 sm:w-40 md:w-48 lg:w-52 transition-transform duration-300 ease-out origin-top group-hover:scale-105"
        >
            <!-- Pure Vector SVG Keffiyeh Pattern with sharp contrast & delicate fine appearance -->
            <KeffiyehPattern
                class="w-full h-auto text-neutral-900 dark:text-neutral-100 drop-shadow-sm transition-all duration-300 group-hover:drop-shadow-md"
            />

            <!-- Floating Solidarity Pill (Visible on hover with smooth animation) -->
            <div
                class="absolute left-1/2 -bottom-3 -translate-x-1/2 pointer-events-none transition-all duration-300 transform"
                :class="isHovered ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-2 scale-90'"
            >
                <div class="flex items-center gap-1.5 rounded-full border border-neutral-200 bg-white/95 px-2.5 py-0.5 text-[10px] font-semibold text-neutral-900 shadow-xl backdrop-blur-sm dark:border-neutral-700 dark:bg-neutral-900/95 dark:text-neutral-100 whitespace-nowrap">
                    <span>🇵🇸</span>
                    <span>فلسطين حرة</span>
                    <span class="text-neutral-400 dark:text-neutral-500">•</span>
                    <span class="text-[9px] text-neutral-600 dark:text-neutral-400">Free Palestine</span>
                </div>
            </div>
        </a>
    </aside>
</template>
