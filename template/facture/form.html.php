<main class="max-w-5xl mx-auto mt-3">
      <div class="flex justify-between items-start mb-6">
        <div>
          <h1 class="text-3xl font-bold text-white mb-2">Commande #12345</h1>
          <p class="text-gray-400">Commande le 02/20/2000</p>
        </div>
        <div class="bg-[#151f11] rounded-lg p-4 text-sm min-w-[250px]">
          <p><span class="font-semibold">Nom:</span> DIASSY</p>
          <p><span class="font-semibold">Prenom:</span> BAKARY</p>
        </div>
      </div>
      <h2 class="text-xl font-semibold mb-4">Résumé de la Commande</h2>
      <div class="bg-[#151f11] rounded-xl overflow-hidden mb-0 border border-[#263a1d]">
        <table class="min-w-full text-left">
          <thead>
            <tr class="text-white">
              <th class="px-6 py-3 font-semibold">Produit</th>
              <th class="px-6 py-3 font-semibold">Quantite</th>
              <th class="px-6 py-3 font-semibold">Prix</th>
              <th class="px-6 py-3 font-semibold">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t border-[#263a1d]">
              <td class="px-6 py-4">Riz</td>
              <td class="px-6 py-4">100</td>
              <td class="px-6 py-4">10 000</td>
              <td class="px-6 py-4">1.000.000fcfa</td>
            </tr>
            <tr class="border-t border-[#263a1d]">
              <td class="px-6 py-4">Lait</td>
              <td class="px-6 py-4">50</td>
              <td class="px-6 py-4">2 000</td>
              <td class="px-6 py-4">2000000cfa</td>
            </tr>
            <tr class="border-t border-[#263a1d]">
              <td class="px-6 py-4">sucre</td>
              <td class="px-6 py-4">200</td>
              <td class="px-6 py-4">500</td>
              <td class="px-6 py-4">5000000fach</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Infos sous le tableau -->
      <div class="flex flex-wrap gap-8 mt-4 mb-8 text-sm justify-end">
        <div>
          <p><span class="font-semibold">Téléphone :</span> 777777777</p>
          <p><span class="font-semibold">Total :</span> 1.370.000fcfa</p>
          <p><span class="font-semibold">Montant payé :</span> 1.300 FCFA</p>
          <p><span class="font-semibold">Statut :</span> <span class="text-green-accent">Impayé</span></p>
        </div>
      </div>
      <!-- Pagination -->
      <div class="flex justify-center items-center space-x-2 mb-8">
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-gray-400 hover:bg-[#101d0b]">&lt;</button>
        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-green-accent text-[#101d0b] font-bold">1</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-white hover:bg-[#101d0b]">2</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-white hover:bg-[#101d0b]">3</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-gray-400 hover:bg-[#101d0b]">&gt;</button>
      </div>
      <div class="mb-8">
        <h3 class="font-bold mb-2">facture</h3>
        <button class="bg-green-accent text-[#101d0b] px-6 py-2 rounded-full font-semibold hover:bg-lime-500 transition">Generer Facture</button>
      </div>
      <div class="mb-4">
        <h3 class="font-bold mb-2">Paiement</h3>
        <div class="bg-[#151f11] rounded-xl overflow-hidden mb-4 border border-[#263a1d]">
          <table class="min-w-full text-left">
            <thead>
              <tr class="text-white">
                <th class="px-6 py-3">Date</th>
                <th class="px-6 py-3">Montant Total</th>
                <th class="px-6 py-3">Methode</th>
                <th class="px-6 py-3">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-t border-[#263a1d]">
                <td class="px-6 py-4">July 17, 2024</td>
                <td class="px-6 py-4">200000Fca</td>
                <td class="px-6 py-4">Carte Credit</td>
                <td class="px-6 py-4">
                  <span class="inline-block bg-green-accent text-[#101d0b] px-4 py-1 rounded-full font-semibold">Payé</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <button class="bg-green-accent text-[#101d0b] px-6 py-2 rounded-full font-semibold hover:bg-lime-500 transition">Enregistrer un paiement</button>
      </div>
    </main>
 