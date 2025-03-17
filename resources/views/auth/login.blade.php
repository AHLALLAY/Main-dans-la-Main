<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-orange-500 mb-6 text-center">Connexion</h2>
    <form>
      <!-- Champ Email -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
        <input
          type="email"
          id="email"
          placeholder="Entrez votre email"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
        />
      </div>

      <!-- Champ Mot de passe -->
      <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
        <input
          type="password"
          id="password"
          placeholder="Entrez votre mot de passe"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
        />
      </div>

      <!-- Bouton de connexion -->
      <button
        type="submit"
        class="w-full bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-300"
      >
        Se connecter
      </button>

      <!-- Lien d'inscription -->
      <p class="text-center text-gray-600 mt-4">
        Pas encore de compte ? 
        <a href="#" class="text-orange-500 hover:underline">S'inscrire</a>
      </p>
    </form>
  </div>
</body>
</html>