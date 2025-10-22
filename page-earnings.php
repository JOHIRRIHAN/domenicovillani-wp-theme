<?php
/**
 * Template Name: Earnings
 * Description: Earnings dashboard with revenue overview and transaction history
 */

get_header();

// Dummy earnings data
$total_earnings = '$12,450.00';
$this_month = '$2,340.00';
$pending = '$450.00';
$available = '$11,550.00';
?>

<div class="nymia-container">
    <?php get_sidebar(); ?>
    
    <div class="nymia-main">
        <?php get_template_part('template-parts/header'); ?>
        
        <div class="nymia-earnings-container">
            <!-- Earnings Header -->
            <div class="nymia-earnings-header">
                <div>
                    <h1><?php esc_html_e('Earnings Dashboard', 'nymia'); ?></h1>
                    <p class="nymia-earnings-subtitle"><?php esc_html_e('Track your revenue and manage payouts', 'nymia'); ?></p>
                </div>
                <button type="button" class="nymia-btn-gradient" id="requestPayout">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    <?php esc_html_e('Request Payout', 'nymia'); ?>
                </button>
            </div>

            <!-- Stats Cards -->
            <div class="nymia-earnings-stats">
                <div class="nymia-stat-card">
                    <div class="nymia-stat-card-icon total">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <div class="nymia-stat-card-content">
                        <p class="nymia-stat-label"><?php esc_html_e('Total Earnings', 'nymia'); ?></p>
                        <h3 class="nymia-stat-value"><?php echo esc_html($total_earnings); ?></h3>
                        <span class="nymia-stat-change positive">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg>
                            +12.5%
                        </span>
                    </div>
                </div>

                <div class="nymia-stat-card">
                    <div class="nymia-stat-card-icon month">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <div class="nymia-stat-card-content">
                        <p class="nymia-stat-label"><?php esc_html_e('This Month', 'nymia'); ?></p>
                        <h3 class="nymia-stat-value"><?php echo esc_html($this_month); ?></h3>
                        <span class="nymia-stat-change positive">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg>
                            +8.2%
                        </span>
                    </div>
                </div>

                <div class="nymia-stat-card">
                    <div class="nymia-stat-card-icon pending">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="nymia-stat-card-content">
                        <p class="nymia-stat-label"><?php esc_html_e('Pending', 'nymia'); ?></p>
                        <h3 class="nymia-stat-value"><?php echo esc_html($pending); ?></h3>
                        <span class="nymia-stat-info"><?php esc_html_e('Processing', 'nymia'); ?></span>
                    </div>
                </div>

                <div class="nymia-stat-card">
                    <div class="nymia-stat-card-icon available">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                    </div>
                    <div class="nymia-stat-card-content">
                        <p class="nymia-stat-label"><?php esc_html_e('Available', 'nymia'); ?></p>
                        <h3 class="nymia-stat-value"><?php echo esc_html($available); ?></h3>
                        <span class="nymia-stat-info"><?php esc_html_e('Ready to withdraw', 'nymia'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Chart and Breakdown -->
            <div class="nymia-earnings-grid">
                <!-- Earnings Chart -->
                <div class="nymia-earnings-card">
                    <div class="nymia-earnings-card-header">
                        <h2><?php esc_html_e('Revenue Overview', 'nymia'); ?></h2>
                        <select class="nymia-period-select">
                            <option value="7"><?php esc_html_e('Last 7 days', 'nymia'); ?></option>
                            <option value="30" selected><?php esc_html_e('Last 30 days', 'nymia'); ?></option>
                            <option value="90"><?php esc_html_e('Last 3 months', 'nymia'); ?></option>
                            <option value="365"><?php esc_html_e('Last year', 'nymia'); ?></option>
                        </select>
                    </div>
                    <div class="nymia-chart-container">
                        <canvas id="earningsChart"></canvas>
                    </div>
                </div>

                <!-- Earnings Breakdown -->
                <div class="nymia-earnings-card">
                    <div class="nymia-earnings-card-header">
                        <h2><?php esc_html_e('Earnings Breakdown', 'nymia'); ?></h2>
                    </div>
                    <div class="nymia-breakdown-list">
                        <div class="nymia-breakdown-item">
                            <div class="nymia-breakdown-icon audio">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                    <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                                </svg>
                            </div>
                            <div class="nymia-breakdown-content">
                                <span class="nymia-breakdown-label"><?php esc_html_e('Audio Content', 'nymia'); ?></span>
                                <span class="nymia-breakdown-value">$7,250</span>
                            </div>
                            <div class="nymia-breakdown-percent">58%</div>
                        </div>

                        <div class="nymia-breakdown-item">
                            <div class="nymia-breakdown-icon live">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                </svg>
                            </div>
                            <div class="nymia-breakdown-content">
                                <span class="nymia-breakdown-label"><?php esc_html_e('Live Streams', 'nymia'); ?></span>
                                <span class="nymia-breakdown-value">$3,800</span>
                            </div>
                            <div class="nymia-breakdown-percent">31%</div>
                        </div>

                        <div class="nymia-breakdown-item">
                            <div class="nymia-breakdown-icon tips">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                            </div>
                            <div class="nymia-breakdown-content">
                                <span class="nymia-breakdown-label"><?php esc_html_e('Tips & Donations', 'nymia'); ?></span>
                                <span class="nymia-breakdown-value">$1,400</span>
                            </div>
                            <div class="nymia-breakdown-percent">11%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transaction History -->
            <div class="nymia-earnings-card">
                <div class="nymia-earnings-card-header">
                    <h2><?php esc_html_e('Recent Transactions', 'nymia'); ?></h2>
                    <button type="button" class="nymia-btn-outline-small">
                        <?php esc_html_e('View All', 'nymia'); ?>
                    </button>
                </div>
                <div class="nymia-transactions-table">
                    <table>
                        <thead>
                            <tr>
                                <th><?php esc_html_e('Date', 'nymia'); ?></th>
                                <th><?php esc_html_e('Description', 'nymia'); ?></th>
                                <th><?php esc_html_e('Type', 'nymia'); ?></th>
                                <th><?php esc_html_e('Status', 'nymia'); ?></th>
                                <th class="text-right"><?php esc_html_e('Amount', 'nymia'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="nymia-date">Jan 20, 2024</span></td>
                                <td>Audio Stream - "Midnight Dreams"</td>
                                <td><span class="nymia-badge audio"><?php esc_html_e('Audio', 'nymia'); ?></span></td>
                                <td><span class="nymia-status completed"><?php esc_html_e('Completed', 'nymia'); ?></span></td>
                                <td class="text-right amount-positive">+$125.00</td>
                            </tr>
                            <tr>
                                <td><span class="nymia-date">Jan 19, 2024</span></td>
                                <td>Live Stream Session</td>
                                <td><span class="nymia-badge live"><?php esc_html_e('Live', 'nymia'); ?></span></td>
                                <td><span class="nymia-status completed"><?php esc_html_e('Completed', 'nymia'); ?></span></td>
                                <td class="text-right amount-positive">+$340.00</td>
                            </tr>
                            <tr>
                                <td><span class="nymia-date">Jan 18, 2024</span></td>
                                <td>Payout to Bank Account</td>
                                <td><span class="nymia-badge payout"><?php esc_html_e('Payout', 'nymia'); ?></span></td>
                                <td><span class="nymia-status processing"><?php esc_html_e('Processing', 'nymia'); ?></span></td>
                                <td class="text-right amount-negative">-$1,000.00</td>
                            </tr>
                            <tr>
                                <td><span class="nymia-date">Jan 17, 2024</span></td>
                                <td>Tip from @musiclover23</td>
                                <td><span class="nymia-badge tips"><?php esc_html_e('Tip', 'nymia'); ?></span></td>
                                <td><span class="nymia-status completed"><?php esc_html_e('Completed', 'nymia'); ?></span></td>
                                <td class="text-right amount-positive">+$50.00</td>
                            </tr>
                            <tr>
                                <td><span class="nymia-date">Jan 16, 2024</span></td>
                                <td>Audio Stream - "Morning Vibes"</td>
                                <td><span class="nymia-badge audio"><?php esc_html_e('Audio', 'nymia'); ?></span></td>
                                <td><span class="nymia-status completed"><?php esc_html_e('Completed', 'nymia'); ?></span></td>
                                <td class="text-right amount-positive">+$85.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Payout Methods -->
            <div class="nymia-earnings-card">
                <div class="nymia-earnings-card-header">
                    <h2><?php esc_html_e('Payout Methods', 'nymia'); ?></h2>
                    <button type="button" class="nymia-btn-outline-small" id="addPayoutMethod">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        <?php esc_html_e('Add Method', 'nymia'); ?>
                    </button>
                </div>
                <div class="nymia-payout-methods">
                    <div class="nymia-payout-method active">
                        <div class="nymia-payout-method-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>
                        </div>
                        <div class="nymia-payout-method-content">
                            <h4><?php esc_html_e('Bank Account', 'nymia'); ?></h4>
                            <p>**** **** **** 4532</p>
                            <span class="nymia-payout-default"><?php esc_html_e('Default', 'nymia'); ?></span>
                        </div>
                        <button type="button" class="nymia-payout-method-action">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </button>
                    </div>

                    <div class="nymia-payout-method">
                        <div class="nymia-payout-method-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                            </svg>
                        </div>
                        <div class="nymia-payout-method-content">
                            <h4>PayPal</h4>
                            <p>john.doe@example.com</p>
                        </div>
                        <button type="button" class="nymia-payout-method-action">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Simple Chart using Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Earnings Chart
    const ctx = document.getElementById('earningsChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan 1', 'Jan 5', 'Jan 10', 'Jan 15', 'Jan 20', 'Jan 25', 'Jan 30'],
                datasets: [{
                    label: 'Earnings',
                    data: [320, 450, 380, 520, 680, 590, 750],
                    borderColor: '#C7541A',
                    backgroundColor: 'rgba(199, 84, 26, 0.1)',
                    tension: 0.4,
                    fill: true,
                    borderWidth: 2,
                    pointRadius: 4,
                    pointBackgroundColor: '#C7541A',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)'
                        },
                        ticks: {
                            color: '#999',
                            callback: function(value) {
                                return '$' + value;
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#999'
                        }
                    }
                }
            }
        });
    }

    // Request Payout Button
    const requestPayoutBtn = document.getElementById('requestPayout');
    if (requestPayoutBtn) {
        requestPayoutBtn.addEventListener('click', function() {
            alert('Payout request functionality!\n\nThis would open a modal to request a payout of your available balance.');
        });
    }

    // Add Payout Method Button
    const addPayoutBtn = document.getElementById('addPayoutMethod');
    if (addPayoutBtn) {
        addPayoutBtn.addEventListener('click', function() {
            alert('Add payout method functionality!\n\nThis would open a form to add a new bank account or payment method.');
        });
    }
});
</script>

<?php get_footer(); ?>

