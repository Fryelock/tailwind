<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'BrokerPro Management System'; ?></title>
    
    <!-- Your existing CSS -->
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Tailwind CSS CDN - Add this line -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Any other existing head elements -->
    <meta name="description" content="Real Estate Brokerage Management System">
    <link rel="icon" href="favicon.ico">
    
    <!-- Optional: Custom Tailwind configuration for your brand colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'broker-blue': '#1e40af',
                        'broker-green': '#059669',
                        'broker-gray': '#6b7280',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Your existing header content -->
    <div class="flex h-screen">
        <!-- Left Sidebar Navigation -->
        <div class="w-64 bg-white shadow-lg">
            <!-- Your existing sidebar content -->
        </div>
        
        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Your existing header/top navigation -->
        </div>
    </div>
</body>
</html> 