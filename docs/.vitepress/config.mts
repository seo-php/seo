import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
  srcDir: 'src',

  base: '/seo/',

  title: 'seophp',
  description: 'SEO toolkit for PHP — manage robots.txt, llms.txt, HTML head tags, Schema.org structured data, and IndexNow URL submissions.',

  themeConfig: {
    nav: [
      { text: 'Introduction', link: '/getting-started' },
      {
        text: 'Packages',
        items: [
          { text: 'Head', link: '/packages/head/' },
          { text: 'Robots', link: '/packages/robots/' },
          { text: 'LLMS.txt', link: '/packages/llms-txt/' },
          { text: 'Schema.org', link: '/packages/schema-org/' },
          { text: 'IndexNow', link: '/packages/indexnow/' },
          { text: 'SEO for Laravel', link: '/packages/seo-laravel' },
        ],
      },
      { text: 'Contributing', link: '/contributing' },
    ],

    sidebar: [
      {
        text: 'Introduction',
        items: [
          { text: 'Getting Started', link: '/getting-started' },
        ],
      },
      {
        text: 'Head',
        items: [
          { text: 'Overview', link: '/packages/head/' },
          { text: 'Laravel Integration', link: '/packages/head/laravel' },
        ],
      },
      {
        text: 'Robots',
        items: [
          { text: 'Overview', link: '/packages/robots/' },
          { text: 'Laravel Integration', link: '/packages/robots/laravel' },
        ],
      },
      {
        text: 'LLMS.txt',
        items: [
          { text: 'Overview', link: '/packages/llms-txt/' },
          { text: 'Laravel Integration', link: '/packages/llms-txt/laravel' },
        ],
      },
      {
        text: 'Schema.org',
        items: [
          { text: 'Overview', link: '/packages/schema-org/' },
        ],
      },
      {
        text: 'IndexNow',
        items: [
          { text: 'Overview', link: '/packages/indexnow/' },
          { text: 'Laravel Integration', link: '/packages/indexnow/laravel' },
        ],
      },
      {
        text: 'SEO for Laravel',
        items: [
          { text: 'Meta Package', link: '/packages/seo-laravel' },
        ],
      },
    ],

    search: {
      provider: 'local',
    },

    socialLinks: [
      { icon: 'github', link: 'https://github.com/seo-php/seo' },
    ],
  },
})
