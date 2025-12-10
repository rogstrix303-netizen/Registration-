<?php
// process.php - Backend handler with matching Emerald Theme

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);
    $gender = htmlspecialchars($_POST['gender']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            /* Matching Emerald Gradient */
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="flex items-center justify-center p-4">

    <!-- Card Container -->
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-2xl overflow-hidden border-t-4 border-emerald-500">
        
        <!-- Header Section -->
        <div class="bg-emerald-50 p-8 text-center border-b border-emerald-100">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-emerald-100 mb-4">
                <svg class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900">Registration Complete</h2>
            <p class="mt-2 text-sm text-gray-600">
                Hello <span class="font-semibold text-emerald-700"><?php echo $firstname; ?></span>, your details have been recorded.
            </p>
        </div>

        <!-- Data Display Section -->
        <div class="p-8">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Application Summary</h3>
            
            <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
                
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Full name</dt>
                    <dd class="mt-1 text-sm text-gray-900 font-semibold"><?php echo $firstname . " " . $lastname; ?></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Gender</dt>
                    <dd class="mt-1 text-sm text-gray-900"><?php echo $gender; ?></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Email address</dt>
                    <dd class="mt-1 text-sm text-gray-900"><?php echo $email; ?></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Phone number</dt>
                    <dd class="mt-1 text-sm text-gray-900"><?php echo $phone; ?></dd>
                </div>

                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Selected Program</dt>
                    <dd class="mt-1 text-sm text-emerald-700 font-bold bg-emerald-50 p-2 rounded inline-block border border-emerald-100">
                        <?php echo $course; ?>
                    </dd>
                </div>
            </dl>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <a href="index.html" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-emerald-700 bg-emerald-100 hover:bg-emerald-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                    ← Return to Home
                </a>
            </div>
        </div>
    </div>

</body>
</html>

<?php
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>
