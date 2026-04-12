# PHP TDD

## Debugging with Neovim + Xdebug

### Prerequisites

- Neovim with `nvim-dap`, `nvim-dap-ui`, and `php-debug-adapter` (via Mason)
- Xdebug enabled in the PHP container

### Setup

The DAP config in `~/.config/nvim/lua/plugins/php.lua` listens on port 9003 and maps the container path to the local workspace:

```
/var/www/html  →  <workspaceFolder>/codebase
```

### Running tests

**With debugger:**

1. Set a breakpoint in Neovim: `<leader>b`
2. Start the DAP listener: `<F5>`
3. Run the test script from inside the container:

```bash
./runPhpunit.sh
```

PHP will connect to Neovim on startup. The DAP UI opens automatically.

**Without debugger:**

```bash
NODEBUG=1 ./runPhpunit.sh
```

### Keymaps

| Key | Action |
|-----|--------|
| `<F5>` | Start / continue |
| `<F10>` | Step over |
| `<F11>` | Step into |
| `<F12>` | Step out |
| `<leader>b` | Toggle breakpoint |

### Notes

- `start_with_request=yes` means PHP **blocks** until a debugger connects. Always start the listener in Neovim before running the script, or use `NODEBUG=1` to skip Xdebug.
- `idekey` in `XDEBUG_CONFIG` is cosmetic — change it to anything or leave it as-is.
