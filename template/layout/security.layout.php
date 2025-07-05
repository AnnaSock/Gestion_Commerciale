<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Commerciale</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'dark-bg': '#172112',
            'darker-bg': '#172112',
            'green-accent': '#4ade80',
            'green-hover': '#22c55e',
            'gray-field': '#2a2a2a',
            'gray-text': '#9ca3af'
          }
        }
      }
    }
  </script>
</head>

<body class="bg-darker-bg text-white min-h-screen">
  
  <!-- Main Content -->
  <main>
    <?php
    echo $contentForLayout
    ?>
  </main>

  <script>
    // Add some interactive functionality
    document.querySelectorAll('select').forEach(select => {
      select.addEventListener('change', function () {
        this.classList.add('border-green-accent');
      });
    });

    document.querySelectorAll('input').forEach(input => {
      input.addEventListener('focus', function () {
        this.classList.add('border-green-accent');
      });
      input.addEventListener('blur', function () {
        if (!this.value) {
          this.classList.remove('border-green-accent');
        }
      });
    });

    // Add hover effects to table rows
    document.querySelectorAll('tbody tr').forEach(row => {
      row.addEventListener('mouseenter', function () {
        this.classList.add('bg-gray-800');
      });
      row.addEventListener('mouseleave', function () {
        this.classList.remove('bg-gray-800');
      });
    });
  </script>
</body>

</html>