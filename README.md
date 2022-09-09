# README

The Novus Framework (Novus is latin for "New") is designed from the ground up for a a performant well maintained funnel framework for Pineapple Company. The Framework allows quick launching of well tested
and complex systems in a tidy, easy to update package.

### How to Use tailwind

- Open Terminal and CD to local directory
- Run: npx tailwindcss -i input.css -o ./public/css/main.css --watch --minify

### Setting up Nginx

If you are using Nginx please make sure that url-rewriting is enabled.

You can easily enable url-rewriting by adding the following configuration for the Nginx configuration-file for the demo-project.

```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

### How do I get set up?

- Summary of set up (use composer update to install dependencies)
- Uses TailWindCSS as the CSS Framework (Ship tiny!)
  https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss
  https://adamwathan.me/css-utility-classes-and-separation-of-concerns/
- Dependencies
- Database configuration
- How to run tests
- Deployment instructions

### Contribution Guidelines

- Writing tests
- Code review
- Other guidelines

### Who do I talk to?

- Mike McBrien - mike@pineapple.co Pineapple Products


## To Do

- Add Page Version Numbers
- Add Template Override logic for specific affiliate views
- Add config variable for one page vs 3 step checkout
- Add logic for config controlled upsell/downsells
- Add config variable for DNVB vs Legacy Sticky
-
