# CancerVax manual staging deployment

## Scope

This configuration is for `crowbarstudios/cancervax`, branch `dev-fixed`, only.
The approved website snapshot is `ef12a4cc9b62bccda6b28fd1ffccedcbcbcd2a74`.

- Source: `/home/up51j258kry3/cancervax-staging-deploy`
- Destination: `/home/up51j258kry3/staging.cancervax.com`
- Private backups: `/home/up51j258kry3/cancervax-staging-backups`
- Production is NOT a permitted destination.

The helper refuses a different source, working directory, destination alias or symlink,
or a checkout whose `.git/HEAD` is not `dev-fixed`. Do not repoint the constants.

## Proposed GitHub changes

Only these four staging deployment-support files are needed:

1. Modify `.cpanel.yml`.
2. Add `.deployment/staging-deploy.php`.
3. Add `.deployment/staging-manifest.json`.
4. Add `.deployment/STAGING-DEPLOYMENT.md`.

No website design/content files are changed by this preparation.
No production helper or production manifest is modified. Do not merge this staging
configuration into `main`. Production promotions must retain production-specific
configuration and update its manifest separately.

## Deployment behavior

The manifest lists all 507 approved website files, including nested directories.
Every source file's SHA-256 must match before any website write is attempted.
Only listed files are installed; copying is file-by-file, not a wildcard or mirror.
Existing destination content must match the candidate or the previously approved
staging fingerprint. Unrecognized edits stop the entire preflight.

All 13 previously staging-only files are included and marked `preserve_existing`.
An identical existing file is left untouched. A missing file is restored from the
approved GitHub copy. A different existing file stops deployment for review.

The helper never copies `.htaccess`, `.env`, authentication files, Git metadata,
server configuration, development artifacts or deployment-support files into the
website. All unlisted files and directories remain untouched. No files are retired
or broadly deleted by deployment. Existing contact/Jotform/CAPTCHA/Thank You code
is part of the unchanged approved website.

The existing staging `.htaccess` must be present and must not be a symlink.
The helper preserves its bytes and checks they did not change during the operation.
It does not parse or change the authentication policy, prove that access protection
works, or access any credentials. Verify password protection in a private browser.

The old staging checkout's `.git` is never read, reset, copied or modified.
Its tracked website files do change during deployment, so the old checkout may
show a dirty working tree afterward. That is expected: use only the new isolated
checkout for future pulls and deployments.

## Backup and failure handling

Every replaced file is copied into a timestamped private release backup and
SHA-256 verified BEFORE any website file changes. New files are recorded as
previously absent. The journal records original permissions and before/after
hashes. Backup directories have mode 0700; backup files/journals have mode 0600.

The deployment prints `Backup: release-...`. Save that exact release name.
There is no automatic backup deletion or retention cleanup.

Replacements use verified temporary files and atomic rename per file. This is NOT
an atomic whole-website switch: an interruption can leave a partially applied release.
The complete backup journal supports restoring that state. Stop after an error;
do not reset Git, delete files, or blindly deploy again.

## GUI-only deployment after explicit approval to push

1. After Replit pushes the approved staging-only configuration, open GoDaddy cPanel
   → Git Version Control → Manage for the NEW `cancervax-staging-deploy` checkout.
2. Verify the repository path and `dev-fixed` branch. Never use the production
   repository, `main`, or the old checkout in the staging website directory.
3. Click **Update from Remote** and verify the new configuration commit.
4. Click **Deploy HEAD Commit** only when ready to modify staging.
5. Retain the output and printed backup name. Verify the password prompt and the
   approved website, including the sitemap, robots, 404s, menu and legal links.

This setup does not enable GitHub Actions, scheduled deployment or server pushes.
The existing GitHub staging deployment workflow must remain disabled. Use pull
followed by the manual Deploy button; never push directly to the cPanel checkout.

## Safe rollback without terminal commands

1. Stop further deployments and record the exact backup name shown in the failed
   or unwanted deployment. In cPanel File Manager, it is also the directory name
   under `/home/up51j258kry3/cancervax-staging-backups`. Do not move or edit its files.
2. Give Replit that backup NAME (not backup contents or credentials), and explicitly
   authorize a staging-only rollback configuration commit.
3. Replit temporarily changes only the task in the staging `.cpanel.yml` to:

   ```yaml
   ---
   deployment:
     tasks:
       - /usr/local/bin/php .deployment/staging-deploy.php rollback EXACT_RELEASE_NAME
   ```

   Replit substitutes the exact validated release name. No production change is involved.
4. In the NEW staging checkout, click **Update from Remote**, verify `dev-fixed`,
   then **Deploy HEAD Commit**. It now executes the guarded rollback, not a deployment.
5. Rollback verifies the complete backup and every affected current website file
   before restoring anything. Newer edits or corrupt backups stop it safely.
   It restores original bytes and permissions and removes only files that this
   release added. It never deletes unrelated files; empty created folders may remain.
6. Review staging and confirm password protection still works.
7. Separately approve restoration of the normal staging task in GitHub. Do not
   click Deploy afterward unless you intend to reapply the candidate. Following a
   successful rollback, the normal deployment would install that candidate again.

Never edit the checkout's `.cpanel.yml` directly in cPanel File Manager: that can
reintroduce the dirty-working-tree deployment block. No web-accessible rollback
endpoint is installed.

## Future website updates

Every approved website change requires its corresponding staging manifest entry
to be updated: new candidate SHA-256, the accepted existing staging fingerprint,
and Git blob ID. New files must be explicitly added to the manifest. Do not weaken
collision checks to accommodate unexplained server changes.

## Remaining conditions to verify on GoDaddy

- `/usr/local/bin/php` exists and is a compatible CLI PHP version (7.4+ recommended).
- The cPanel account can read the isolated checkout, write staging and create the
  private backup directory, with enough disk space and inodes for backups.
- Server website files match either the approved candidate or the prior approved
  staging snapshot. An older/custom file causes a safe stop, not an overwrite.
- Existing password protection and `.env` are correct; this helper preserves them
  but does not validate their secrets or runtime behavior.
- No custom cron job or external server automation is configured independently.
  GitHub workflow inspection cannot establish this.

Local tests remap ONLY the three hardcoded filesystem roots in a disposable copy
of the helper and manifest. The prepared package keeps the exact confirmed GoDaddy
paths, contains no testing bypass, and has not been executed on GoDaddy.
