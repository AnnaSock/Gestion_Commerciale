<main class="p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">Liste des commandes</h1>
            
            <div class="flex justify-center gap-4 mb-6">
                <div class="relative">
                    <select class="bg-gray-field border border-gray-600 rounded-lg px-4 py-2 pr-8 text-white focus:outline-none focus:border-green-500">
                        <option>Filtrer par statut</option>
                        <option>Impayé</option>
                        <option>Payé</option>
                        <option>En cours</option>
                    </select>
                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="bg-gray-field border border-gray-600 rounded-lg px-4 py-2 pr-8 text-white focus:outline-none focus:border-green-500">
                        <option>Filtrer par client</option>
                        <option>BAKARY DIASSY</option>
                        <option>ANONYME</option>
                        <option>AU DIOP</option>
                    </select>
                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="bg-gray-field border border-gray-600 rounded-lg px-4 py-2 pr-8 text-white focus:outline-none focus:border-green-500">
                        <option>Filtrer par État</option>
                        <option>Actif</option>
                        <option>Inactif</option>
                    </select>
                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <div class="relative">
                    <a href="/commande" class="bg-green-600 p-2"><button class="bg-green-600 p-2"> Passer Une Commande</button></a>
                </div>
            </div>

            <div class="bg-darker-bg rounded-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-darker-bg border-b border-gray-600">
                        <tr>
                            <th class="text-left py-4 px-6 font-medium text-gray-300">Numéro Commande</th>
                            <th class="text-left py-4 px-6 font-medium text-gray-300">Client</th>
                            <th class="text-left py-4 px-6 font-medium text-gray-300">Statut</th>
                            <th class="text-left py-4 px-6 font-medium text-gray-300">Facture</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr class="hover:bg-gray-750 transition-colors">
                            <td class="py-4 px-6 text-white">#COM_001</td>
                            <td class="py-4 px-6 text-white">BAKARY DIASSY</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 bg-red-900 text-red-200 rounded-full text-sm">Impayé</span>
                            </td>
                            <td class="py-4 px-6">
                                
                                <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors">
                                    voir
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-750 transition-colors">
                            <td class="py-4 px-6 text-white">#COM_002</td>
                            <td class="py-4 px-6 text-white">ANONYME</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 bg-red-900 text-red-200 rounded-full text-sm">Impayé</span>
                            </td>
                            <td class="py-4 px-6">
                                <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors">
                                    voir
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-750 transition-colors">
                            <td class="py-4 px-6 text-white">#COM_003</td>
                            <td class="py-4 px-6 text-white">AU DIOP</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 bg-red-900 text-red-200 rounded-full text-sm">Impayé</span>
                            </td>
                            <td class="py-4 px-6">
                                <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors">
                                    voir
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center mt-6">
                <nav class="flex items-center space-x-2">
                    <button class="p-2 text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-medium">
                        1
                    </button>
                    <button class="w-8 h-8 text-gray-400 hover:text-white transition-colors rounded-full flex items-center justify-center">
                        2
                    </button>
                    <button class="w-8 h-8 text-gray-400 hover:text-white transition-colors rounded-full flex items-center justify-center">
                        3
                    </button>
                    <button class="p-2 text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </nav>
            </div>
        </div>
    </main>


