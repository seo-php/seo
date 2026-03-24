---
title: Contributing
description: Guidelines for contributing to the seophp monorepo.
---

# Contributing

Contributions are welcome, and are accepted via pull requests. Please review these guidelines before submitting any pull requests.

## Guidelines

- Ensure that your code follows the package coding standard by running `composer lint`.
- Ensure static analysis passes by running `composer analyse`.
- Ensure tests pass by running `composer test`.
- Send a coherent commit history, making sure each individual commit in your pull request is meaningful. Commit messages must follow [Conventional Commits](https://conventionalcommits.org).
- You may need to [rebase](https://git-scm.com/book/en/v2/Git-Branching-Rebasing) to avoid merge conflicts.

## Process

1. Fork the repository
2. Create a new branch
3. Code, test, analyse, lint, commit, and push
4. Open a pull request detailing your changes. Make sure to follow the [pull request template](https://github.com/seo-php/seo/blob/main/.github/PULL_REQUEST_TEMPLATE.md)

## Setup

Clone your fork and install the dependencies:

```bash
composer install
```

## Lint

Lint your code:

```bash
composer lint
```

Lint and auto-fix your code:

```bash
composer lint-fix
```

## Static Analysis

Analyse your code:

```bash
composer analyse
```

## Tests

Run the test suite:

```bash
composer test
```
