@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../google/cloud/src/Core/bin/google-cloud-batch
php "%BIN_TARGET%" %*
