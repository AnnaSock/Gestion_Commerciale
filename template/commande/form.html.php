  <main class="max-w-6xl mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold mb-8">Nouvelle Commande</h1>

    <!-- Form Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
      <!-- Client Selection -->
      <div>
        <label class="block text-sm font-medium mb-2">Client</label>
        <div class="relative">
          <select
            class="w-full bg-gray-field border border-gray-600 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-green-accent appearance-none">
            <option>Sélectionner client</option>
          </select>
          <div class="absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
        </div>
      </div>

      <!-- Payment -->
      <div>
        <label class="block text-sm font-medium mb-2">Paiement</label>
        <input type="text" placeholder="Entrer le montant"
          class="w-full bg-gray-field border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:outline-none focus:border-green-accent">
      </div>
    </div>

    <!-- Add Product Section -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold mb-4">Ajouter Produit</h2>
      <div class="flex flex-col md:flex-row gap-4">
        <div class="flex-1">
          <div class="relative">
            <select
              class="w-full bg-gray-field border border-gray-600 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-green-accent appearance-none">
              <option>Sélectionner un produit</option>
            </select>
            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="flex-1">
          <input type="text" placeholder="Saisir le montant"
            class="w-full bg-gray-field border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:outline-none focus:border-green-accent">
        </div>
        <button
          class="bg-green-accent hover:bg-green-hover text-black font-medium px-6 py-3 rounded-lg transition-colors">
          Ajouter
        </button>
      </div>
    </div>

    <!-- Products Table -->
    <div class="bg-dark-bg rounded-lg overflow-hidden mb-8">
      <table class="w-full">
        <thead>
          <tr class="border-b border-gray-700">
            <th class="text-left px-6 py-4 font-medium">Produits</th>
            <th class="text-left px-6 py-4 font-medium">Quantité</th>
            <th class="text-left px-6 py-4 font-medium">Prix</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-700">
            <td class="px-6 py-4">Sac de riz</td>
            <td class="px-6 py-4">2</td>
            <td class="px-6 py-4">40 000 fcfa</td>
          </tr>
          <tr class="border-b border-gray-700">
            <td class="px-6 py-4">Sucre</td>
            <td class="px-6 py-4">5</td>
            <td class="px-6 py-4">200000 fcfa</td>
          </tr>
          <tr>
            <td class="px-6 py-4">Lait</td>
            <td class="px-6 py-4">10</td>
            <td class="px-6 py-4">1200 fcfa</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mb-8">
      <div class="flex items-center space-x-2">
        <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <button
          class="w-8 h-8 flex items-center justify-center bg-green-accent text-black rounded font-medium">1</button>
        <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white">2</button>
        <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white">3</button>
        <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Total and Submit -->
    <div class="flex justify-between items-center">
      <div class="text-xl font-semibold">
        <span class="text-gray-text">Total:</span>
        <span class="ml-2">61200 fcfa</span>
      </div>
      <div class="bg-green-accent hover:bg-green-hover text-black font-medium px-8 py-3 rounded-lg transition-colors"><a href="/validerCommande">Valider commande</a></div>
    </div>
  </main>

  