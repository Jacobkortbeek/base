var plan = require('flightplan');
var webRoot = {
  staging: 'subdomains/portfolio/base/wp-content/themes/base',
  production: 'path/to/staging/wordpress/theme'
};

plan.target('staging', [
  {
    host: 'shell.gridhost.co.uk',
    username: 'kortbeek',
    agent: process.env.SSH_AUTH_SOCK
  }
], {
  webRoot: webRoot.staging
});

plan.target('production', [
  {
    host: 'host',
    username: 'username',
    password: 'password',
    privateKey: 'path/to/file/key.pem',
    agent: process.env.SSH_AUTH_SOCK
  }
], {
  webRoot: webRoot.production
});

plan.local(function (local) {
  local.log('Searching for file to upload');
  var filesToCopy = local.exec('git ls-files', {silent: true});
  local.log('Search Complete.........');
  var webRoot = plan.runtime.options.webRoot;
  local.log('Uploading files to :: ' + webRoot);
  local.transfer(filesToCopy, webRoot);
  local.log('Uploading Complete.......');
});

plan.remote(function (remote) {
  var webRoot = plan.runtime.options.webRoot;
  remote.log('changing permission of all files to 644');
  remote.exec('find ' + webRoot + ' -type f -exec chmod 644 {} +');
  remote.log('changing permission of all folders to 755');
  remote.exec('find ' + webRoot + ' -type d -exec chmod 755 {} +');
});
