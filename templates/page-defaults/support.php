

<!DOCTYPE html>
<html>

<head>
  <?php template("includes/header"); ?>
  <title><?php echo $company['name'] ?> | Support</title>

  <style>
  .icon {
    width: 40px;
    height: 40px;
    background-repeat: no-repeat;
    background-size: contain;
    border-radius: 6px;
  }

  .phone {
    background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='40px' height='40px' version='1.1' viewBox='0 0 752 752' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3CclipPath id='a'%3E%3Cpath d='m139.21 139.21h473.58v473.58h-473.58z'/%3E%3C/clipPath%3E%3C/defs%3E%3Cpath d='m37.602 0h676.8c20.766 0 37.602 20.766 37.602 37.602v676.8c0 20.766-16.836 37.602-37.602 37.602h-676.8c-20.766 0-37.602-20.766-37.602-37.602v-676.8c0-20.766 16.836-37.602 37.602-37.602z'/%3E%3Cg clip-path='url(%23a)'%3E%3Cpath d='m510.83 442.17c29.027 16.133 58.066 32.262 87.094 48.395 12.496 6.9375 17.973 21.656 13.055 35.082-24.973 68.223-98.117 104.23-166.93 79.117-140.92-51.438-245.38-155.89-296.81-296.81-25.117-68.816 10.895-141.96 79.117-166.93 13.422-4.918 28.145 0.5625 35.098 13.055 16.113 29.027 32.246 58.066 48.375 87.094 7.5625 13.617 5.7812 29.777-4.5664 41.41-13.551 15.25-27.105 30.5-40.656 45.734 28.93 70.449 88.633 130.15 159.08 159.08 15.234-13.551 30.484-27.105 45.734-40.656 11.645-10.348 27.793-12.125 41.41-4.5664z' fill='%23fff' fill-rule='evenodd'/%3E%3C/g%3E%3C/svg%3E");
  }

  .email {
    background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='40pt' height='40pt' version='1.1' viewBox='0 0 752 752' xmlns='http://www.w3.org/2000/svg'%3E%3Cg%3E%3Cpath d='m37.602 0h676.8c20.766 0 37.602 20.766 37.602 37.602v676.8c0 20.766-16.836 37.602-37.602 37.602h-676.8c-20.766 0-37.602-20.766-37.602-37.602v-676.8c0-20.766 16.836-37.602 37.602-37.602z'/%3E%3Cpath d='m549.14 246.76c-3.1719-1.2305-6.582-1.9883-10.184-1.9883h-325.92c-3.5977 0-7.0078 0.75781-10.184 1.9883l173.14 120.05z' fill='%23fff'/%3E%3Cpath d='m383.11 392.39c-2.082 1.5156-4.5938 2.2734-7.1055 2.2734s-5.0195-0.75781-7.1992-2.2734l-181.86-126.07c-0.1875 1.5625-0.375 3.2188-0.375 4.9258v209.56c0 14.633 11.84 26.473 26.473 26.473h325.92c14.633 0 26.473-11.84 26.473-26.473v-209.56c0-1.6562-0.1875-3.3633-0.42578-4.9258z' fill='%23fff'/%3E%3C/g%3E%3C/svg%3E%0A");
  }
  </style>
</head>

<body>

<?php template('includes/basicHeader'); ?>

  <div class="container container-vsl mx-auto py-20 px-5 md:px-8" style="min-height: 100vh">
    <div class="content px-5">

      <h1>Customer Support</h1>
      <p>We are available 24 hours a day, 7 days a week.</p>

      <h2 style="margin-top: 1.5rem">Need product support or help?</h2>
      <p>Here's how to contact us.</p>

      <div class="flex w-full flex-col">
        <div class="flex items-center mb-5">
          <div class="icon phone mr-2"></div>
          <a href="tel:<?= $company['phone']; ?>"><?= $company['phone']; ?></a>
        </div>
        <div class="flex items-center">
          <div class="icon email mr-2"></div>
          <a href="mailto:support@5gmale.com"><?= $company['email']; ?></a>
        </div>
      </div>
    </div>

		
    <?php template('includes/footer'); ?>

    <?php if ($site['debug'] == true) {
			template('debug', null, null, 'debug');
	} ?>

</body>