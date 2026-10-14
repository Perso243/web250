# WEB-250 — Debugging Setup

**This README is your graded debugging notebook.** Complete the TODOs below with your **own** observations after using VS Code + Xdebug. Do not paste `phpinfo()` output or anything confidential.

## Local setup

- Operating system and local server (Mac/MAMP or Windows/XAMPP): Windows/XAMPP
- PHP version shown in the **browser's phpinfo**: 8.2.12
- Xdebug version: 3.5.3
- Active `php.ini` path (no secrets): C:\xampp\php\php.ini
- Xdebug / VS Code port (recommended 9003): 9003
- Local Apache port (our class uses 55000): 55000
- Mac/MAMP FastCGI `-idle-timeout 600` configured? (Windows: N/A): N/A
- Mac/MAMP 45-second breakpoint pause, Step Over, Continue test result (Windows: N/A): N/A
- Local exercise index URL: http://localhost/web250/debugging_setup/sandbox/sandbox_breakpoints.php
- Hosted exercise index URL: TODO

## Exercise 01 — Variables and Watch

- Prediction for `$observations` before the `+=` line: 3
- Value before Step Over: 3
- Value after Step Over: 5
- What you learned about the breakpoint and Watch: The breakpoint paused the program *before* the given line. After using Step Over, the given line was activated, incrementing the watched variable.
- Screenshot: `evidence/01_variables.png` — uploaded

## Exercise 02 — Loop and conditional breakpoint

- Predicted total and average: 10, 2.5
- `$total` after the first two iterations: 6
- Values seen when `$dayIndex === 2` (index, count, total): 2, 1, 6
- Why the conditional breakpoint helped: The conditional breakpoint only fired once, instead of with every single loop. This would be helpful in larger and more complicated loops.
- Screenshot: `evidence/02_conditional.png` — uploaded

## Exercise 03 — Step Into / Step Out / Call Stack

- Predicted output: TODO
- Which function called `formatObservation()`?: TODO
- What Step Into showed that Step Over would skip: TODO
- Where Step Out returned you: TODO
- Screenshot: `evidence/03_call_stack.png` — TODO caption

## Exercise 04 — Find and fix the bug

- Original incorrect browser output: TODO
- Values you observed while stepping through the loop: TODO
- Original error and minimal correction (in your words): TODO
- Corrected output: TODO
- Why PHP did not raise an exception: TODO
- Screenshot: `evidence/04_fixed_bug.png` — TODO caption

## How to view this project

- Local: Open `web250/debugging_setup/index.php` through your MAMP/XAMPP browser URL.
- Webhost: Open the course index and follow the Debugging Setup link.
- GitHub: Link to this folder on `main` in the Moodle Comments area.

**Safety reminder:** Never commit or deploy `php.ini`, `_local_phpinfo.php`, credentials, or logs. The project-level `.vscode/launch.json`, this README, and evidence screenshots belong on **GitHub** but **not** on the public webhost. Never activate Xdebug on your public webhost.
