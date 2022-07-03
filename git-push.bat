@echo off
set /p MESSAGE="Message: "

git add -A
git commit -m "%MESSAGE%"
git push