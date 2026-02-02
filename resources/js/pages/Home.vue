<template>
  <div class="min-h-screen bg-gray-950 text-gray-100">
    <!-- Hero -->
    <section class="relative overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 via-purple-600/10 to-cyan-500/10"></div>
      <div class="relative mx-auto max-w-7xl px-6 py-24">
        <div class="grid gap-12 md:grid-cols-2 items-center">
          <div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">
              Freelancer für <span class="text-indigo-400">Softwareentwicklung</span>
            </h1>
            <p class="mt-6 text-lg text-gray-300">
              Ich entwickle performante, wartbare Web‑ und Backend‑Lösungen mit modernen Technologien
              – von der Idee bis zum produktiven Einsatz.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
              <a href="#kontakt" class="rounded-xl bg-indigo-600 px-6 py-3 font-semibold hover:bg-indigo-500 transition">
                Projekt anfragen
              </a>
              <a href="#leistungen" class="rounded-xl border border-gray-700 px-6 py-3 font-semibold hover:bg-gray-800 transition">
                Leistungen ansehen
              </a>
            </div>
          </div>
          <div class="relative">
            <div class="rounded-2xl bg-gray-900/60 p-6 shadow-2xl ring-1 ring-white/10">
              <ul class="space-y-3 text-sm">
                <li>✔ Laravel · Vue · Tailwind CSS</li>
                <li>✔ Saubere Architekturen & APIs</li>
                <li>✔ Fokus auf Performance & Sicherheit</li>
                <li>✔ Verständliche Kommunikation</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Leistungen -->
    <section id="leistungen" class="mx-auto max-w-7xl px-6 py-20">
      <h2 class="text-3xl font-bold">Leistungen</h2>
      <p class="mt-3 text-gray-400 max-w-2xl">
        Ich unterstütze Unternehmen und Selbstständige bei der Umsetzung stabiler und skalierbarer Softwarelösungen.
      </p>

      <div class="mt-10 grid gap-6 md:grid-cols-3">
        <div class="rounded-2xl bg-gray-900 p-6 ring-1 ring-white/10">
          <h3 class="text-xl font-semibold">Webentwicklung</h3>
          <p class="mt-2 text-gray-400">Moderne Webanwendungen mit Laravel, Vue und Tailwind.</p>
        </div>
        <div class="rounded-2xl bg-gray-900 p-6 ring-1 ring-white/10">
          <h3 class="text-xl font-semibold">Backend & APIs</h3>
          <p class="mt-2 text-gray-400">Saubere REST‑ & Event‑basierte Schnittstellen.</p>
        </div>
        <div class="rounded-2xl bg-gray-900 p-6 ring-1 ring-white/10">
          <h3 class="text-xl font-semibold">Beratung</h3>
          <p class="mt-2 text-gray-400">Architektur, Code‑Reviews und technische Entscheidungen.</p>
        </div>
      </div>
    </section>

    <!-- Über mich -->
    <section class="bg-gray-900/60">
      <div class="mx-auto max-w-7xl px-6 py-20">
        <h2 class="text-3xl font-bold">Über mich</h2>
        <p class="mt-4 max-w-3xl text-gray-300">
          Ich bin Softwareentwickler mit Fokus auf nachhaltige Lösungen. Mir sind saubere Strukturen,
          Verständlichkeit und langfristige Wartbarkeit wichtiger als kurzfristige Hacks.
        </p>
      </div>
    </section>

    <!-- Kontakt -->
    <section id="kontakt" class="mx-auto max-w-7xl px-6 py-20">
      <div class="rounded-3xl bg-gradient-to-br from-indigo-600 to-purple-600 p-10">
        <h2 class="text-3xl font-bold">Projekt starten?</h2>
        <p class="mt-3 max-w-2xl">
          Schreib mir eine kurze Nachricht und wir besprechen, wie ich dich unterstützen kann.
        </p>
        <a
          href="mailto:kontakt@deine-domain.de"
          class="mt-6 inline-block rounded-xl bg-gray-950 px-6 py-3 font-semibold hover:bg-gray-900 transition"
        >
          Jetzt kontaktieren
        </a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-gray-800 py-8 text-center text-sm text-gray-500">
      © {{ new Date().getFullYear() }} · Freelancer Softwareentwicklung
    </footer>
  </div>
</template>

<script setup>
// Keine Logik nötig – reine Landing Page
</script>
