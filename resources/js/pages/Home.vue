<template>
  <div :class="dark ? 'dark' : ''">
    <div class="min-h-screen bg-gray-100 text-gray-900 dark:bg-gray-950 dark:text-gray-100 transition-colors duration-300">
      <!-- Header -->
      <header class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
        <div class="font-bold text-lg">{{ t('title') }}</div>
        <div class="flex items-center gap-4">
          <button @click="toggleLang" class="text-sm underline">
            {{ lang === 'de' ? 'EN' : 'DE' }}
          </button>
          <button @click="toggleDark" class="rounded-lg border px-3 py-1 text-sm">
            {{ dark ? 'Light' : 'Dark' }}
          </button>
        </div>
      </header>

      <!-- Hero -->
      <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 via-purple-600/10 to-cyan-500/10"></div>
        <div class="relative mx-auto max-w-7xl px-6 py-24 grid md:grid-cols-2 gap-12 items-center">
          <div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">
              {{ t('headline') }}
            </h1>
            <p class="mt-6 text-lg text-gray-600 dark:text-gray-300">
              {{ t('subline') }}
            </p>
            <div class="mt-8 flex gap-4">
              <a href="#kontakt" class="rounded-xl bg-indigo-600 px-6 py-3 font-semibold text-white hover:bg-indigo-500 transition">
                {{ t('cta') }}
              </a>
            </div>
          </div>

          <!-- Profilbild -->
          <div class="flex justify-center">
            <img
              src="/Profilbild.JPG"
              alt="Profilbild"
              class="w-64 h-64 object-cover rounded-3xl shadow-2xl ring-4 ring-indigo-500/30 animate-float"
            />
          </div>
        </div>
      </section>

      <!-- Leistungen -->
      <section class="mx-auto max-w-7xl px-6 py-20">
        <h2 class="text-3xl font-bold">{{ t('services') }}</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
          <div v-for="s in t('serviceList')" :key="s.title" class="rounded-2xl bg-white dark:bg-gray-900 p-6 ring-1 ring-black/5 dark:ring-white/10">
            <h3 class="text-xl font-semibold">{{ s.title }}</h3>
            <p class="mt-2 text-gray-600 dark:text-gray-400">{{ s.text }}</p>
          </div>
        </div>
      </section>

      <!-- Referenzen -->
      <section class="bg-gray-200 dark:bg-gray-900/60">
        <div class="mx-auto max-w-7xl px-6 py-20">
          <h2 class="text-3xl font-bold">{{ t('projects') }}</h2>
          <div class="mt-10 grid md:grid-cols-3 gap-6">
            <div v-for="p in t('projectList')" :key="p.title" class="rounded-2xl bg-white dark:bg-gray-950 p-6 shadow">
              <h3 class="font-semibold text-lg">{{ p.title }}</h3>
              <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ p.text }}</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Kontakt -->
      <section id="kontakt" class="mx-auto max-w-7xl px-6 py-20">
        <div class="rounded-3xl bg-gradient-to-br from-indigo-600 to-purple-600 p-10 text-white">
          <h2 class="text-3xl font-bold">{{ t('contact') }}</h2>
          <p class="mt-3 max-w-2xl">{{ t('contactText') }}</p>
          <a href="mailto:kontakt@deine-domain.de" class="mt-6 inline-block rounded-xl bg-black/80 px-6 py-3 font-semibold hover:bg-black transition">
            {{ t('contactBtn') }}
          </a>
        </div>
      </section>

      <footer class="border-t border-gray-300 dark:border-gray-800 py-8 text-center text-sm text-gray-500">
        © {{ new Date().getFullYear() }} · Freelancer Softwareentwicklung
      </footer>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const lang = ref('de')
const dark = ref(
  localStorage.getItem('theme') === 'dark'
)

const toggleLang = () => {
  lang.value = lang.value === 'de' ? 'en' : 'de'
}

const toggleDark = () => {
  dark.value = !dark.value
  localStorage.setItem('theme', dark.value ? 'dark' : 'light')
}


const translations = {
  de: {
    title: 'Freelancer Softwareentwicklung',
    headline: 'Freelancer für moderne Softwareentwicklung',
    subline: 'Ich entwickle nachhaltige Web- und Backend-Lösungen mit Laravel & Vue.',
    cta: 'Projekt anfragen',
    services: 'Leistungen',
    serviceList: [
      { title: 'Webentwicklung', text: 'Moderne, performante Webanwendungen.' },
      { title: 'Backend & APIs', text: 'Saubere Architekturen und Schnittstellen.' },
      { title: 'Beratung', text: 'Technische Entscheidungen & Code-Reviews.' }
    ],
    projects: 'Referenzen & Projekte',
    projectList: [
      { title: 'Business Web App', text: 'Laravel & Vue Plattform für KMU.' },
      { title: 'API Plattform', text: 'Skalierbare REST API.' },
      { title: 'Interne Tools', text: 'Effizienzsteigerung durch Automatisierung.' }
    ],
    contact: 'Projekt starten?',
    contactText: 'Schreib mir eine Nachricht und wir besprechen dein Vorhaben.',
    contactBtn: 'Jetzt kontaktieren'
  },
  en: {
    title: 'Freelance Software Developer',
    headline: 'Freelance Software Developer',
    subline: 'I build sustainable web and backend solutions with Laravel & Vue.',
    cta: 'Start a project',
    services: 'Services',
    serviceList: [
      { title: 'Web Development', text: 'Modern, high-performance web apps.' },
      { title: 'Backend & APIs', text: 'Clean architectures and interfaces.' },
      { title: 'Consulting', text: 'Architecture & code reviews.' }
    ],
    projects: 'Projects & References',
    projectList: [
      { title: 'Business Web App', text: 'Laravel & Vue platform.' },
      { title: 'API Platform', text: 'Scalable REST APIs.' },
      { title: 'Internal Tools', text: 'Automation & efficiency.' }
    ],
    contact: 'Start a project?',
    contactText: 'Send me a message and let’s talk.',
    contactBtn: 'Contact me'
  }
}

const t = (key) => translations[lang.value][key]
</script>

<style>
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.animate-float {
  animation: float 6s ease-in-out infinite;
}
</style>
