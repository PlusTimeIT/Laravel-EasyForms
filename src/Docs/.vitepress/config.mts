import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
  title: "Laravel EasyForms",
  description: "Documentation for Laravel EasyForms",
  srcDir: './src',
  outDir: '../../docs',
  base: "/Laravel-EasyForms/",
  themeConfig: {
    // https://vitepress.dev/reference/default-theme-config
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Getting Started', link: '/getting-started/about' }
    ],

    sidebar: [
      {
        text: 'Getting Started',
        items: [
          { text: 'About', link: '/getting-started/about' },
          { text: 'Installation', link: '/getting-started/installation' },
        ]
      },
      {
        text: 'Concepts',
        items: [
          { text: 'General', link: '/concepts/general' },
          { text: 'Forms', link: '/concepts/forms' },
          { text: 'Fields', link: '/concepts/fields' },
          { text: 'Actions', link: '/concepts/actions' },
          { text: 'Elements', link: '/concepts/elements' },
          { text: 'Enums', link: '/concepts/enums' },

        ]
      },
      {
        text: 'Templates',
        items: [
          { text: 'Docker Template - Split', link: 'https://github.com/PlusTimeIT/EasyForms-Split-Template-Docker' },
          { text: 'Docker Template - Joint', link: 'https://github.com/PlusTimeIT/EasyForms-Template-Docker' }
        ]
      }
    ],
    socialLinks: [
      { icon: 'github', link: 'https://github.com/plustimeit/Laravel-EasyForms' }
    ]
  }
})
