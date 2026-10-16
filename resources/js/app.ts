import { createInertiaApp } from '@inertiajs/vue3';
import type { DefineComponent } from 'vue';
import AuthLayout from '@/apps/auth/layouts/AuthLayout.vue';
import AppLayout from '@/apps/panel/layouts/AppLayout.vue';
import SettingsLayout from '@/apps/panel/layouts/settings/Layout.vue';
import { initializeTheme } from '@/composables/useAppearance';
import { initializeFlashToast } from '@/lib/flashToast';

const appName = import.meta.env.VITE_APP_NAME || 'Ugarit';

/**
 * The pages of each application of the frontend (web, auth, panel), named "{app}/{page}".
 */
const pages = import.meta.glob<{ default: DefineComponent }>(
    './apps/*/pages/**/*.vue',
);

/**
 * The file of a page: "panel/Dashboard" is ./apps/panel/pages/Dashboard.vue.
 *
 * @param name The Inertia page name.
 * @returns The page's file, relative to this one.
 */
function pageFile(name: string): string {
    const [app = '', ...segments] = name.split('/');

    return `./apps/${app}/pages/${segments.join('/')}.vue`;
}

void createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    resolve: async (name) => {
        const page = pages[pageFile(name)];

        if (!page) {
            throw new Error(`Inertia page not found: ${name}`);
        }

        return (await page()).default;
    },
    layout: (name) => {
        switch (true) {
            case name.startsWith('web/'):
                return null;
            case name.startsWith('auth/'):
                return AuthLayout;
            case name.startsWith('panel/settings/'):
                return [AppLayout, SettingsLayout];
            default:
                return AppLayout;
        }
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();

// This will listen for flash toast data from the server...
initializeFlashToast();
